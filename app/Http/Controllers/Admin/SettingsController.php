<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageUploadEngine;
use App\Http\Controllers\Controller;
use App\Models\EmailSetting;
use App\Models\GeneralSetting;
use App\Models\SmsGatewaySetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function generalSettings()
    {
        $data = GeneralSetting::first();
        return $data;
    }

    public function generalSettingsUpdate(Request $request)
    {
        $setting = GeneralSetting::first();

        $validated = $request->validate([
            'site_name'        => 'nullable|string|max:255',
            'site_tagline'     => 'nullable|string|max:255',
            'site_logo'        => 'nullable|string',
            'site_favicon'     => 'nullable|string',
            'timezone'         => 'nullable|string|max:100',

            'contact_email'    => 'nullable|email|max:255',
            'contact_phone'    => 'nullable|string|max:20',
            'contact_address'  => 'nullable|string',
            'support_email'    => 'nullable|email|max:255',

            'date_format'      => 'nullable|string|max:20',
            'time_format'      => 'nullable|string|max:20',
            'sendbirdge_api_token' => 'nullable',
            'maintenance_mode' => 'nullable|boolean',
        ]);

        $data = [
            'site_name' => $validated['site_name'] ?? null,
            'site_tagline' => $validated['site_tagline'] ?? null,
            'timezone' => $validated['timezone'] ?? 'UTC',
            'contact_email' => $validated['contact_email'] ?? null,
            'contact_phone' => $validated['contact_phone'] ?? null,
            'contact_address' => $validated['contact_address'] ?? null,
            'support_email' => $validated['support_email'] ?? null,
            'date_format' => $validated['date_format'] ?? 'Y-m-d',
            'time_format' => $validated['time_format'] ?? 'H:i',
            'sendbirdge_api_token' => $validated['sendbirdge_api_token'] ?? null,
            'maintenance_mode' => $validated['maintenance_mode'] ?? false,

        ];

        // Handle base64 logo
        if (!empty($validated['site_logo'])) {
            if ($setting && $setting->site_logo) {
                ImageUploadEngine::deleteImage($setting->site_logo);
            }
            $data['site_logo'] = ImageUploadEngine::process(
                $validated['site_logo'],
                'uploads/logo/',
                [150, 250]
            );
        } else {
            $data['site_logo'] = $setting->site_logo ?? null;
        }

        // Handle base64 favicon
        if (!empty($validated['site_favicon'])) {
            if ($setting && $setting->site_favicon) {
                ImageUploadEngine::deleteImage($setting->site_favicon);
            }
            $data['site_favicon'] = ImageUploadEngine::process(
                $validated['site_favicon'],
                'uploads/favicon/',
                [32, 32]
            );
        } else {
            $data['site_favicon'] = $setting->site_favicon ?? null;
        }
        setToEnv($data,'sendbirdge');
        if ($setting) {
            $setting->update($data);
            return $setting;
        } else {
            $newSetting = GeneralSetting::create($data);
            return $newSetting;
        }
    }

    public function emailSetting()
    {
        $data= EmailSetting::first();
        return $data;
    }

    public function emailSettingUpdate(Request $request)
    {
        $validated = $request->validate([
            'mail_driver' => 'required|string|max:50',
            'mail_host' => 'nullable|string|max:255',
            'mail_port' => 'nullable|integer',
            'mail_username' => 'nullable|string|max:255',
            'mail_password' => 'nullable|string|max:255',
            'mail_from_address' => 'nullable|email|max:255',
            'mail_from_name' => 'nullable|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            $setting = EmailSetting::first();

            if ($setting) {
                $setting->update($validated);
            } else {
                $setting = EmailSetting::create($validated);
            }
            setToEnv($setting);
            DB::commit();
            return response()->json($setting);

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => 'Failed to update email settings',
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    public function smsGateway()
    {
        $data = SmsGatewaySetting::first();
        return $data;
    }

    public function smsGatewaySetting(Request $request)
    {
        $request->validate([
            'gateway_name'       => 'required|string|in:twilio,vonage|max:100',

            'twilio_sid'         => 'required_if:gateway_name,twilio|string|max:255',
            'twilio_auth_token'  => 'required_if:gateway_name,twilio|string|max:255',
            'twilio_number'      => 'required_if:gateway_name,twilio|string|max:20',

            'vonage_nexmo_key'         => 'required_if:gateway_name,vonage|string|max:255',
            'vonage_nexmo_secret'      => 'required_if:gateway_name,vonage|string|max:255',
            'vonage_nexmo_brand'       => 'required_if:gateway_name,vonage|string|max:255',
        ]);

        try {
            DB::beginTransaction();
            $setting = SmsGatewaySetting::first();
            $data = [
                'gateway_name' => $request->input('gateway_name'),
                'twilio_sid' => $request->input('twilio_sid') ?? null,
                'twilio_auth_token' => $request->input('twilio_auth_token') ?? null,
                'twilio_number' => $request->input('twilio_number') ?? null,
                'vonage_nexmo_key' => $request->input('vonage_nexmo_key') ?? null,
                'vonage_nexmo_secret' => $request->input('vonage_nexmo_secret') ?? null,
                'vonage_nexmo_brand' => $request->input('vonage_nexmo_brand') ?? null,
            ];
            if ($setting) {
                $setting->update($data);
                $setting = $setting->fresh();
            } else {
                $setting = SmsGatewaySetting::create($data);
            }

            setToEnv($setting, 'sms');

            DB::commit();
            return response()->json($setting);

        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message' => 'Failed to update SMS gateway settings',
                'error' => $exception->getMessage()
            ], 500);
        }

    }


}
