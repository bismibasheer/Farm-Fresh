<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey='customerid';
    protected $fillable=['customername','address','email','locationid','username','password','contact','regdate'];
    use HasFactory;
    public function location()
    {
        return $this->belongsTo(Location::class,'locationid','locationid');
    }
}
