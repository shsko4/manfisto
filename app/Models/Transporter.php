<?php

namespace App\Models;

use App\Models\Manfisto;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transporter extends Model
{
    use HasFactory;
    protected $fillable = [
        'tin',
        'name',
        'email',
        'phone',
    ];

    public function manfisto()
    {
        return $this->hasMany(Manfisto::class);
    }

    public function getNextManAttribute()
    {

        $data = Manfisto::select(DB::raw('MAX(man_no) as man_no'))
            ->where('transporter_id', $this->id)
            ->get();

        $next_man = $data->max('man_no') + 1;
        return $next_man;
    }
}
