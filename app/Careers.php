<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'careers';
    public $timestamps = false;
}
