<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'name',
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

    public function goodlist()
    {
        return $this->hasMany(GoodList::class);
    }
}
