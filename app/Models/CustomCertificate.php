<?php

namespace App\Models;

use App\Models\Custom;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomCertificate extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['custom_id','serial','name','cert_no','recipt_no','nolon','stamp'
    ,'bpt','vat','total','cert_recipt_no'];

    public function custom()
    {
        return $this->belongsTo(Custom::class);
    }

  
}
