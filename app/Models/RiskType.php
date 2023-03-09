<?php

namespace App\Models;

use App\Models\RiskCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiskType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','status','risk_category_id',
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
    public function risk_category()
    {
        return $this->belongsTo(RiskCategory::class);
    }
}
