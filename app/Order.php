<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = ['firstname', 'lastname', 'adres', 'plaats', 'postcode', 'emailadres', 'created_at', 'updated_at'];

}
