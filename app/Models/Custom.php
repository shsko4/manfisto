<?php

namespace App\Models;

use App\Models\User;
use App\Models\Office;
use App\Models\CustomCertificate;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Custom extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['driver_name', 'car_no', 'user_id', 'office_id', 'date_of_trip', 'recipt_no'];

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

    public function getNextSerialAttribute()
    {

        $data = CustomCertificate::select(DB::raw('MAX(serial) as serial'))
            ->where('custom_id', $this->id)
            ->get();
        if ($data) {
            $next_serial = $data->max('serial') + 1;
            return $next_serial;
        }

        return 1;
    }

    public function getCertCountAttribute()
    {

        $customCert = CustomCertificate::where('custom_id', $this->id);

        if ($customCert) {
            return $customCert->count();
        }
        return 0;
    }

    public function getTotalTaxAmountAttribute()
    {
        $data = CustomCertificate::select(DB::raw('sum(total) as total'))
            ->where('custom_id', $this->id)
            ->get();
        if ($data) {
            $next_serial = $data->max('total');
            return $next_serial;
        }

        return 0;
    }
}
