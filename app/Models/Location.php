<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey='locationid';
    protected $fillable=['districtid','locationname'];
    use HasFactory;
    public function district()
    {
        return $this->belongsTo(District::class,'districtid','districtid');
    }
}
