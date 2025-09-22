<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $data = SocialLink::orderBy('name','ASC')->get();
        return response()->json(['data' => $data], 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:100',
            'icon'   => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^fa(-[a-z]+){1,2} fa-[a-z0-9-]+$/', $value)) {
                        $fail('The '.$attribute.' must be a valid Font Awesome class.');
                    }
                }
            ],
            'url'    => 'required|url|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $data = SocialLink::create($request->all());
        return response()->json(['message' => 'Social Link created successfully', 'data' => $data], 201);
    }

    public function show($id)
    {
        $data = SocialLink::find($id);
        return response()->json(['data' => $data], 200);
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $data = SocialLink::find($id);
        if (!$data) {
            return response()->json(['message' => 'Social Link not found'], 404);
        }
        $request->validate([
            'name'   => 'required|string|max:100',
            'icon'   => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^fa(-[a-z]+){1,2} fa-[a-z0-9-]+$/', $value)) {
                        $fail('The '.$attribute.' must be a valid Font Awesome class.');
                    }
                }
            ],
            'url'    => 'required|url|max:255',
            'status' => 'required|in:active,inactive',
        ]);
        $data->update($request->all());
        return response()->json(['message' => 'Social Link updated successfully', 'data' => $data], 200);
    }

    public function destroy($id)
    {
        $data = SocialLink::find($id);
        if (!$data) {
            return response()->json(['message' => 'Social Link not found'], 404);
        }

        $data->delete();
        return response()->json(['message' => 'Social Link deleted successfully'], 200);
    }

    public function statusChange(Request $request, $id)
    {
        $data = SocialLink::find($id);
        if (!$data) {
            return response()->json(['message' => 'Social Link not found'], 404);
        }
        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);
        $data->status = $request->input('status');
        $data->save();
        return response()->json(['message' => 'Status updated successfully', 'data' => $data], 200);
    }
}
