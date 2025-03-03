<?php

namespace App\Http\Controllers;

use App\Models\HealthyBites;
use Illuminate\Http\Request;

class HealthyBitesController extends Controller
{
    public function store() 
    {
        
        $incomingFields = request()->validate([
            'name' => 'required'
        ]);

        $name = request('name');

        HealthyBites::create($incomingFields);
    
        return redirect('/menu')->with('success', $name . ' has been added.');

    }

    public function destroy(HealthyBites $healthybite) { 
        
        $healthybite->delete();
        $name = $healthybite->name;
        return redirect('/menu')->with('success', $name . ' has been deleted.');
    
    }
}
