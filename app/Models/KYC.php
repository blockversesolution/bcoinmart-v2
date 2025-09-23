<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class KYC extends Model
{
    use LogsActivity;
    protected $fillable = [
        'user_id',
        "application_code",
        'verification_type',
        'document_type',
        'file_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)
            ->leftJoin("countries", "countries.id", "=", "users.country_id")
            ->leftJoin("states", "states.id", "=", "users.state_id")
            ->leftJoin("cities", "cities.id", "=", "users.city_id")
            ->select(
                "users.id",
                "users.name",
                "users.email",
                "users.phone",
                "users.code",
                "users.country_id",
                "users.state_id",
                "users.city_id",
                "countries.name as country_name",
                "states.name as state_name",
                "cities.name as city_name",
                "users.zip",
                "users.address"
            );
    }

    public function getActivitylogOptions():LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable)
            ->useLogName('kyc')
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "KYC has been {$eventName}");
    }

    /**
     * Accessor to get the full file path.
     */
    public function getFilePathAttribute(): ?string
    {
        $fileName = $this->attributes['file_path'] ?? null;
        if (!$fileName) {
            return null;
        }
        return url('/images/kyc/' . $fileName);
    }


}
