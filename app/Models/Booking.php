<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey='requestid';
    protected $fillable=['productid','customerid','quantity','totalamount','requestdate','requireddate','status'];

    public function product()
    {
        return $this->belongsTo(Product::class,'productid','productid');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customerid','customerid');
    }
    use HasFactory;
    public function booking()
{
    return $this->belongsTo(Booking::class,'requestid','requestid');
}
}
