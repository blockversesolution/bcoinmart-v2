<?php

namespace App\Trait;

use App\Helpers\Classes\ImageUploadEngine;
use App\Models\KYC;

trait KYCTrait
{
    private function mainQuery(){
        return KYC::with('user')->orderBy('id','DESC');
    }
    private function filter($query, $data)
    {
        if (array_key_exists('search', $data)) {
            if (isset($data['search'])) {
                $search = $data['search'];
                $query->where(function ($q) use ($search) {
                    $q->whereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%")
                            ->orWhere('phone', 'like', "%{$search}%")
                            ->orWhere('code', 'like', "%{$search}%");
                    })->orWhere('application_code', 'like', "%{$search}%");
                });
            }
        }

        if (array_key_exists('user_id', $data)) {
            if (isset($data['user_id'])) {
                $query->where('user_id', $data['user_id']);
            }
        }

        if (array_key_exists('status', $data)) {
            if (isset($data['status'])) {
                $query->where('status', $data['status']);
            }
        }

        if (array_key_exists('country_id', $data)) {
            if (isset($data['country_id'])) {
                $query->whereHas('user', function ($userQuery) use ($data) {
                    $userQuery->whereHas('user', function ($profileQuery) use ($data) {
                        $profileQuery->where('country_id', $data['country_id']);
                    });
                });
            }
        }

        return $query;

    }


}
