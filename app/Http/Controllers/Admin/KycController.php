<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadEngine;
use App\Http\Controllers\Controller;
use App\Models\KYC;
use Illuminate\Http\Request;

class KycController extends Controller
{
    public function index()
    {
        $data=KYC::with('user')->orderBy('id','DESC')->get();
        return $data;
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
           'user_id' => 'required|exists:users,id',
            'document_type' => 'required|string|max:255',
            'file' => 'required|string|max:255',
        ]);

        $data = Kyc::create([
            'user_id' => $request->user_id,
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

        return $data;
    }

    public function show($id)
    {
        $data=KYC::with('user')->find($id);
        return $data;
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $data = KYC::find($id);
        if (!$data) {
            return response()->json(['message' => 'KYC record not found'], 404);
        }
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'document_type' => 'required|string|max:255',
            'file' => 'nullable|string|max:255',
        ]);
        if ($request->file) {
            ImageUploadEngine::deleteImage($data->file_path);
            $filePath = ImageUploadEngine::process(
                $request->file,
                'kyc',
                null,
                true,
                [150,150],
                $data->file_path
            );
            $data->file_path = $filePath;
        }
        $data->user_id = $request->user_id;
        $data->document_type = $request->document_type;
        $data->save();
        return $data;

    }


    public function destroy($id)
    {
        $data = KYC::find($id);
        if (!$data) {
            return response()->json(['message' => 'KYC record not found'], 404);
        }
        ImageUploadEngine::deleteImage($data->file_path);
        $data->delete();
        return response()->json(['message' => 'KYC record deleted successfully'], 200);
    }

    public function statusChange(Request $request,$id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);
        $data = KYC::find($id);
        if (!$data) {
            return response()->json(['message' => 'KYC record not found'], 404);
        }
        $data->status = $request->status;
        $data->save();
        return response()->json(['message' => 'KYC status updated successfully'], 200);
    }

}
