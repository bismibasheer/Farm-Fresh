<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='productid';
    protected $fillable=['categoryid','productname','productimage','productprice','productstock','quantity'];
    public function category()
    {
        return $this->belongsTo(Category::class,'categoryid','categoryid');
    }
    use HasFactory;
}
