<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carts_items extends Model
{
        public function cart()
        {
                return $this->belongsTo('App\Models\Carts');
        }
        public function commodity()
        {
                return $this->belongsTo('App\Models\commodities');
        }
}