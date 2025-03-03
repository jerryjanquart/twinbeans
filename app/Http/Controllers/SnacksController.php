<?php

namespace App\Http\Controllers;

use App\Models\Snacks;
use Illuminate\Http\Request;

class SnacksController extends Controller
{
    public function store() 
    {
        
        $incomingFields = request()->validate([
            'name' => 'required'
        ]);

        $name = request('name');

        Snacks::create($incomingFields);
    
        return redirect('/menu')->with('success', $name . ' has been added.');

    }

    public function destroy(Snacks $snack) { 
        
        $snack->delete();
        $name = $snack->name;
        return redirect('/menu')->with('success', $name . ' has been deleted.');
    
    }
}
