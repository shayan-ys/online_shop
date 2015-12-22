<?php

namespace Barad;

use Illuminate\Database\Eloquent\Model;

class FileManager extends Model
{
    protected $table = 'file_manager';
    protected $primaryKey = 'id';
    protected $fillable = array('title', 'desc', 'path_org ', 'path_resized', 'path_small');
}
