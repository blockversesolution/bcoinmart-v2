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
        'document_type',
        'file_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)
            ->select('id','name','email', 'phone');
    }

    public function getActivitylogOptions():LogOptions
    {
        return LogOptions::defaults()
            ->logOnly($this->fillable)
            ->useLogName('kyc')
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "KYC has been {$eventName}");
    }
}
