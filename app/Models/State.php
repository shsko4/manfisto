<?php

namespace App\Models;

use App\Models\City;
use App\Models\Locality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name'];

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
    public function cities()
    {
        return $this->hasMany(City::class)->orderBy('name');
    }
}
