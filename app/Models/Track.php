<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Track extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'from_city_id',
        'to_city_id',
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
    public function fromcity()
    {
        return $this->belongsTo(City::class,'from_city_id');
    }
    public function tocity()
    {
        return $this->belongsTo(City::class, 'to_city_id');
    }

}
