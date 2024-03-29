<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\RiskType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiskCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','status',
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
    
    public function risk_type()
    {
        return $this->hasMany(RiskType::class,'risk_category_id');
    }
}
