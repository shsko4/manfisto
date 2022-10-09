<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GoodList extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'item_id',
        'unit_id',
        'vat',
        'bpt',
        'final_tax',
        'prod_tax',
        'total',
        'year',
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

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
