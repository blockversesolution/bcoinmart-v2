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
        'verification_type',
        'document_type',
        'file_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)
            ->select(
                'id',
                'name',
                'email',
                'phone',
                'country',
                'state',
                'city',
                'address',
                'zip_code',
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
