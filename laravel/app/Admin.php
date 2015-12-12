<?php

namespace Barad;

use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
}
