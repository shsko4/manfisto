<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\PenaltyType;
use App\Models\PenaltyOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penalty extends Model
{
    use HasFactory;

    protected $fillable = [
        'penalty_owner_id',
        'penalty_type_id',
        'location',
        'car_no',
        'vat',
        'penalty_amount',
        'stamp',
        'tax3',
        'tax4',
        'total',
        'user_id',
        'office_id',
        'recipt_no',
        'status',
        'note',
    ];

    public function penaltytype()
    {
        return $this->belongsTo(PenaltyType::class, 'penalty_type_id');
    }

    public function penaltyowner()
    {
        return $this->belongsTo(PenaltyOwner::class,'penalty_owner_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
