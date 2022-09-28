<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\User;
use App\Models\Penalty;
use App\Models\Category;
use App\Models\Manfisto;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Mailer\Transport;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function manfisto()
    {
        return $this->hasMany(Manfisto::class);
    }

    public function penalty()
    {
        return $this->hasMany(Penalty::class);
    }

    public function transporter()
    {
        return $this->hasMany(Transport::class);
    }

    public function unit()
    {
        return $this->hasMany(Unit::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }


}
