<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
	protected $table = 'downloads';
 	protected $fillable = ['name' ,'description' , 'file'];
    public $timestamps = false;
}
