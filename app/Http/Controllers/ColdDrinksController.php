<?php

namespace App\Http\Controllers;

use App\Models\ColdDrinks;
use Illuminate\Http\Request;

class ColdDrinksController extends Controller
{
    public function store() 
    {
        
        $incomingFields = request()->validate([
            'name' => 'required'
        ]);

        $name = request('name');

        ColdDrinks::create($incomingFields);
    
        return redirect('/menu')->with('success', $name . ' has been added.');

    }

    public function destroy(ColdDrinks $colddrink) { 
        
        $colddrink->delete();
        $name = $colddrink->name;
        return redirect('/menu')->with('success', $name . ' has been deleted.');
    
    }
    
}
