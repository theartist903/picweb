<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'management';
    protected $primaryKey = 'id';
    protected $fillable = ['management_name' , 'level'];
    public $timestamps = false;

    public function section()
    {
        return $this->hasOne(ManagementSection::class , 'management_id' , 'id');
    }
}
