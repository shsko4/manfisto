<?php

namespace App\Models;

use App\Models\State;
use App\Models\Locality;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['state_id','locality_id','name'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
