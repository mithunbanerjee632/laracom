<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{

    //protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug',
        'image',

    ];
}
