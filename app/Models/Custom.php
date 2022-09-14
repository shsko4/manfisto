<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\CustomCertificate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custom extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['driver_name','car_no','user_id','office_id','date_of_trip'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function custom_cert()
    {
        return $this->hasMany(CustomCertificate::class);
    }
}
