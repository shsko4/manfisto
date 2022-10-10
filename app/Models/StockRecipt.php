<?php

namespace App\Models;

use App\Models\Load;
use App\Models\User;
use App\Models\Track;
use App\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockRecipt extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'track_id',
        'load_id',
        'boker_name',
        'driver_name',
        'car_no',
        'user_id',
        'office_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
    public function track()
    {
        return $this->belongsTo(Track::class);
    }
    public function theload()
    {
        return $this->belongsTo(Load::class);
    }
}
