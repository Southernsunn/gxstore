<?php

namespace gxstore;

use Illuminate\Database\Eloquent\Model;

class shopping_carts_details extends Model
{
    //
    protected $fillable = [
        'shopping_cart_id', 'product_id', 'quantity',
    ];
}
