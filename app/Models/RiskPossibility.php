<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\RiskRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiskPossibility extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name',
    'user_id',
    'office_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
    public function riskrecord()
    {
        return $this->hasMany(RiskRecord::class, 'risk_record_id');
    }
}
