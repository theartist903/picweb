<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenders extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tenders';
    public $timestamps = false;
}
