<?php

namespace App\Models;

use App\Models\Load;
use App\Models\Track;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManfistoList extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'track_id',
        'load_id',
        'nolon',
        'vat',
        'bpt',
        'bpt_agent',
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

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function theload()
    {
        return $this->belongsTo(Load::class);
    }
}
