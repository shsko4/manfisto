<?php

namespace App\Models;

use App\Models\Office;
use App\Models\TypeOfId;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenaltyOwner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type_of_id_id',
        'id_no',
        'address',
        'phone',
        'office_id',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function TypeOfId()
    {
        return $this->belongsTo(TypeOfId::class);
    }

    public function penalty()
    {
        return $this->hasMany(Penalty::class, 'penalty_owner_id');
    }
}
