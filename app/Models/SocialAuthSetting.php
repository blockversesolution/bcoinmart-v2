<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class SocialAuthSetting extends Model
{
    use LogsActivity;
    protected $fillable = [
        'provider',
        'client_id',
        'client_secret',
        'redirect_url',
        'bot_name',
        'token',
    ];

    public function getActivitylogOptions():LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable)
            ->useLogName('social_auth_setting')
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "SocialAuthSetting has been {$eventName}");
    }
}
