<?php

namespace Barad;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = array('name', 'price', 'color', 'category');
}
