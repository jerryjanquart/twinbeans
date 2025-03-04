<?php

namespace App\Http\Controllers;

use App\Models\TeaFlavors;
use Illuminate\Http\Request;

class TeaFlavorsController extends Controller
{
    public function store() 
    {
        
        $incomingFields = request()->validate([
            'name' => 'required'
        ]);

        $name = request('name');

        TeaFlavors::create($incomingFields);
    
        return redirect('/menu')->with('success', $name . ' has been added.');

    }

    public function destroy(TeaFlavors $teaflavor) { 
        
        $teaflavor->delete();
        $name = $teaflavor->name;
        return redirect('/menu')->with('success', $name . ' has been deleted.');
    
    }
}
