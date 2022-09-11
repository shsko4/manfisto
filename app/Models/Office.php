<?php

namespace App\Models;

use App\Models\User;
use App\Models\Penalty;
use App\Models\Manfisto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\Mailer\Transport;

class Office extends Model
{
    use HasFactory;
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


}
