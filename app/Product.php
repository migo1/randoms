<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use BeyondCode\Vouchers\Traits\HasVouchers;

class Product extends Model
{
    use HasVouchers;

    protected $fillable = [
        'name', 'price'
    ];
}
