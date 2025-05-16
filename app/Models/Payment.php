<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{


    protected $primaryKey='paymentid';
    protected $fillable=['requestid','paymentstatus','paymentdate'];



    

    public function booking()
    {
        return $this->belongsTo(Booking::class,'requestid','requestid');
    }





    use HasFactory;
}
