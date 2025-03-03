<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PinballMachines extends Model
{

    public $timestamps = true;
    
    protected $fillable = [
        'name', 
        'slug',
        'year',
        'manufacturer',
        'headline', 
        'about',
        'active'
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

}
