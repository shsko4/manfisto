<?php

namespace App\Models;

use App\Models\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locality extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['state_id','name'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class)->orderBy('name');
    }

    public function getDeletedAttribute()
    {
       return $this->trashed();
    }
}
