<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Classes\ApiResponse;
use App\Helpers\Classes\ImageUploadEngine;
use App\Http\Controllers\Controller;
use App\Http\Requests\KycRequest;
use App\Http\Requests\KycStatusRequest;
use App\Models\KYC;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KycController extends Controller
{
    public function index(Request $request)
    {
        $data=KYC::with('user')->orderBy('id','DESC')->paginate($request->all());
        return $data;
    }

    public function store(KycRequest $request)
    {
        $data = Kyc::create([
            'user_id' => $request->user_id,
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

        return ApiResponse::success(200, 'KYC record created successfully', $data);
    }

    public function show($id)
    {
        $data=KYC::with('user')->find($id);
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

    public function statusChange(KycStatusRequest $request,$id)
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
        return ApiResponse::success(200, 'KYC status updated successfully', $data);
    }

    private function filter($query, $data)
    {
        if (array_key_exists('user_id', $data)) {

        }
    }

}
