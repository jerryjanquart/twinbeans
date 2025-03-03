<?php

namespace App\Http\Controllers;

use App\Models\LatteFlavors;
use Illuminate\Http\Request;

class LatteFlavorsController extends Controller
{
    public function store() 
    {
        
        $incomingFields = request()->validate([
            'name' => 'required'
        ]);

        $name = request('name');

        LatteFlavors::create($incomingFields);
    
        return redirect('/menu')->with('success', $name . ' has been added.');

    }

    public function destroy(LatteFlavors $flavor) { 
        
        $flavor->delete();
        $name = $flavor->name;
        return redirect('/menu')->with('success', $name . ' has been deleted.');
    
    }


}
