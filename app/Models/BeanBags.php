<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeanBags extends Model
{
    protected $fillable = [
        'blend',
        'oz',
        'cost'
    ];

    public $timestamps = true;
}
