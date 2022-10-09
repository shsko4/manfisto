<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\Category;
use App\Models\GoodList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'name',
        'category_id',
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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function goodlist()
    {
        return $this->hasMany(GoodList::class);
    }
}
