<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //
    protected $fillable = ['orderid', 'productid', 'quantity', 'created_at', 'updated_at'];

}
