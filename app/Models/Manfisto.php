<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Office;
use App\Models\Transporter;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manfisto extends Model
{
    use HasFactory;
    protected $fillable = [
        'man_no',
        'transporter_id',
        'car_no',
        'dest',
        'city_id',
        'size',
        'nolon',
        'vat',
        'bpt',
        'bpt2',
        'status',
        'recipt_no',
        'acc_user_id',
        'user_id',
        'office_id',
    ];

    public function transporter()
    {
        return $this->belongsTo(Transporter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalAttribute()
    {
        $vat = $this->vat;
        $bpt = $this->bpt;
        $bpt2 = $this->bpt2;
        return $vat + $bpt + $bpt2;
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }


}
