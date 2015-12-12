<?php

namespace Barad;

use Illuminate\Database\Eloquent\Model;

class Customer extends User
{
    protected $table = 'customers';
    protected $primaryKey = 'id_user';
}
