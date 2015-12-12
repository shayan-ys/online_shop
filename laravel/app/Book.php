<?php

namespace Barad;

use Illuminate\Database\Eloquent\Model;

class Book extends Product
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = array('translator', 'shabak', 'publisher', 'last_publish_date');
}
