<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotDrinks extends Model
{
    protected $fillable = [
        'small', 
        'medium',
        'large'
    ];
    public $timestamps = true;
}
