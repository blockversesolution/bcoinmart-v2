<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialAuthSetting;
use Illuminate\Http\Request;

class SocialAuthSettingController extends Controller
{
    public function index()
    {
        $data = SocialAuthSetting::orderBy('id','DESC')->get();
        return response()->json(['data' => $data], 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'provider'      => 'required|string|in:google,telegram|max:50',
            'client_id'     => 'required_if:provider,google|string|max:255',
            'client_secret' => 'required_if:provider,google|string|max:255',
            'redirect_url'  => 'required|string|max:255',
            'bot_name'      => 'required_if:provider,telegram|string|max:255',
            'token'         => 'required_if:provider,telegram|string|max:255',
            'status'        => 'required|in:active,inactive',
        ]);

        $setting = SocialAuthSetting::create($request->validated());

        setToEnv($setting, 'authentication');

        return response()->json(['message' => 'Social Auth Setting created successfully', 'data' => $setting], 201);
    }

    public function edit()
    {

    }

    public function show($id)
    {
        $data = SocialAuthSetting::find($id);
        return response()->json(['data' => $data], 200);
    }

    public function update(Request $request, $id)
    {
        $data = SocialAuthSetting::find($id);
        if (!$data) {
            return response()->json(['message' => 'Social Auth Setting not found'], 404);
        }
        $request->validate([
            'provider'      => 'required|string|in:google,telegram|max:50',
            'client_id'     => 'required_if:provider,google|string|max:255',
            'client_secret' => 'required_if:provider,google|string|max:255',
            'redirect_url'  => 'required|string|max:255',
            'bot_name'      => 'required_if:provider,telegram|string|max:255',
            'token'         => 'required_if:provider,telegram|string|max:255',
            'status'        => 'required|in:active,inactive',
        ]);
        $data->update($request->validated());
        setToEnv($data, 'authentication', $data->provider);
        return response()->json(['message' => 'Social Auth Setting updated successfully', 'data' => $data], 200);
    }

    public function destroy($id)
    {
        $data = SocialAuthSetting::find($id);
        if (!$data) {
            return response()->json(['message' => 'Social Auth Setting not found'], 404);
        }
        removeFromEnv('authentication', $data->provider);
        $data->delete();
        return response()->json(['message' => 'Social Auth Setting deleted successfully'], 200);
    }

    public function statusChange(Request $request, $id)
    {
        $data = SocialAuthSetting::find($id);
        if (!$data) {
            return response()->json(['message' => 'Social Auth Setting not found'], 404);
        }

        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);
        $data->status = $request->input('status');
        $data->save();
        return response()->json(['message' => 'Status updated successfully', 'data' => $data], 200);
    }

}
