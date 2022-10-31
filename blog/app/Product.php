<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filable = ['id', 'name', 'detail', 'price', 'unit'];
}
