<?php

namespace App\Models;

use App\Models\User;
use App\Models\Custom;
use App\Models\Office;
use App\Models\Penalty;
use App\Models\Manfisto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'model',
        'manfisto_id',
        'penalty_id',
        'custom_id',
        'name',
        'recipt_no',
        'user_id',
        'office_id',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function manfisto()
    {
        return $this->belongsTo(Manfisto::class);
    }
    public function penalty()
    {
        return $this->belongsTo(Penalty::class);
    }
    public function custom()
    {
        return $this->belongsTo(Custom::class);
    }
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
