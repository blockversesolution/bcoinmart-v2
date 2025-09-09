<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class SocialLink extends Model
{
    use LogsActivity;
    protected $fillable = [
        'name',
        'icon',
        'url',
        'status',
    ];

    public function getActivitylogOptions():LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable)
            ->useLogName('social_link')
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "SocialLink has been {$eventName}");
    }
}
