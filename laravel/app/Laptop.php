<?php

namespace Barad;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Product
{
    protected $table = 'laptops';
    protected $primaryKey = 'id';
    protected $fillable = array('id_product', 'cpu_type', 'cpu_f', 'ram_gen', 'ram_cap', 'hard_desc', 'hard_cap', 'region');
}
