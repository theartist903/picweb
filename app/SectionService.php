<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionService extends Model
{
    protected $table = 'section_services';
    protected $primaryKey = 'id';
    protected $fillable = ['management_section_id' , 'service_title'];
    public $timestamps = false;


}
