<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'category', 'price', 'imgurl', 'archived', 'firsthighlight', 'secondhighlight', 'thirdhighlight', 'created_at', 'updated_at'];

}
