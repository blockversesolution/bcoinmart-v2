<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Classes\ApiResponse;
use App\Helpers\Classes\ImageUploadEngine;
use App\Http\Controllers\Controller;
use App\Http\Requests\KYC\KycBulkActionRequest;
use App\Http\Requests\KYC\KycRequest;
use App\Http\Requests\KYC\KycStatusRequest;
use App\Models\KYC;
use App\Trait\KYCTrait;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KycController extends Controller
{
    use KYCTrait;

    public function index(Request $request)
    {
        $data = $this->mainQuery();
        $data = $this->filter($data, $request->all());
        $data = $data->paginate(10);
        return $data;
    }

    public function store(KycRequest $request)
    {
        $data = Kyc::create([
            'user_id' => $request->user_id,
            'application_code' => generateUniqueCode('kyc_code', 'KYC'),
            'verification_type' => $request->verification_type,
            'document_type' => $request->document_type,
            'file_path' => ImageUploadEngine::process(
                $request->file,
                'kyc',
                null,
                true,
                [],
                null
            ),
        ]);

        return ApiResponse::success(200, 'KYC record created successfully', $this->mainQuery()->where('id', $data->id)->first());
    }

    public function show($id)
    {
        $data = $this->mainQuery()->where('id', $id)->first();
        return ApiResponse::success(200, 'KYC record created successfully', $data);
    }

    public function destroy($id)
    {
        $data = KYC::find($id);
        if (!$data) {
            return ApiResponse::notFound(404, 'KYC record not found');
        }

        if ($data->status === 'approved') {
            return ApiResponse::forbidden(Response::HTTP_NOT_ACCEPTABLE, 'Approved KYC records cannot be deleted');
        }
        ImageUploadEngine::deleteImage($data->file_path);
        $data->delete();
        return ApiResponse::success(200, 'KYC record deleted successfully');
    }

    public function statusChange(KycStatusRequest $request, $id)
    {
        $data = KYC::find($id);

        if (!$data) {
            return ApiResponse::notFound(404, 'KYC record not found');
        }

        if ($data->status === 'approved') {
            return ApiResponse::forbidden(Response::HTTP_NOT_ACCEPTABLE, 'Approved KYC records cannot be deleted');
        }
        $data->status = $request->status;
        $data->save();
        return ApiResponse::success(200, 'KYC status updated successfully', $this->mainQuery()->where('id', $data->id)->first());
    }

    public function bulkAction(KycBulkActionRequest $request)
    {
        $kycQuery = KYC::whereIn('id', $request->ids);

        if (!$kycQuery->exists()) {
            return ApiResponse::notFound(404, 'No KYC records found for the provided IDs');
        }

        if ((clone $kycQuery)->where('status', 'approved')->exists()){
            return ApiResponse::forbidden(
                Response::HTTP_NOT_ACCEPTABLE,
                'One or more approved KYC records cannot be modified or deleted'
            );
        }

        if ($request->action === 'delete') {

            $kycQuery->pluck('file_path')->each(function (string $path): void {
                ImageUploadEngine::deleteImage($path);
            });

            $kycQuery->delete();

            return ApiResponse::success(200, 'Selected KYC records deleted successfully');

        }

        if ($request->action === 'update_status') {
            $kycQuery->update(['status' => $request->status]);

            return ApiResponse::success(200, 'Selected KYC records status updated successfully');
        }

        return ApiResponse::validationError(
            ['action' => ['Invalid action specified.']],
            422,
            'Invalid action'
        );
    }


}
