<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commodities extends Model
{
   // protected $guarded = [];
    public $fillable = ['type','name','filename','price','image_path','account','productnum','description'];

      //此商品屬於哪些訂單
    public function orders()
    {
        return $this->belongsToMany(\App\Models\Order::class)->withTimestamps();
    }

}
