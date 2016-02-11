<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{

    public $table = 'crud';
    //

    protected $fillable = [
        'name',
        'email',
        'crud_level'
    ];

}
