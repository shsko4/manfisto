<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\RiskType;
use App\Models\RiskBatch;
use App\Models\RiskDegree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiskRecord extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['description','status','risk_type_id','risk_batch_id','risk_degree_id','risk_possibility_id',
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
    public function risktype()
    {
        return $this->belongsTo(RiskType::class,'risk_type_id');
    }
    public function riskbatch()
    {
        return $this->belongsTo(RiskBatch::class,'risk_batch_id');
    }
    public function riskdegree()
    {
        return $this->belongsTo(RiskDegree::class,'risk_degree_id');
    }
    public function riskpossibility()
    {
        return $this->belongsTo(RiskPossibility::class,'risk_possibility_id');
    }
}
