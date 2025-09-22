<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class GeneralSetting extends Model
{
    use LogsActivity;
    protected $fillable = [
        'site_name',
        'site_tagline',
        'site_logo',
        'site_favicon',
        'timezone',
        'contact_email',
        'contact_phone',
        'contact_address',
        'support_email',
        'date_format',
        'time_format',
        'sendbirdge_api_token',
        'maintenance_mode',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable)
            ->useLogName('general_setting')
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "GeneralSetting has been {$eventName}");
    }
}
