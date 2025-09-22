<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class SmsGatewaySetting extends Model
{
    use LogsActivity;
    protected $fillable = [
        'gateway_name',
        'twilio_sid',
        'twilio_auth_token',
        'twilio_number',
        'vonage_nexmo_key',
        'vonage_nexmo_secret',
        'vonage_nexmo_brand',
    ];

    public function getActivitylogOptions():LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable)
            ->useLogName('sms_gateway_setting')
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "SmsGatewaySetting has been {$eventName}");
    }
}
