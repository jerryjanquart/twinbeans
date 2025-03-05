<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{

    public function update(Special $special)
    {

        request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $special->update([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('/')->with('success', 'Special updated.');    
    
    }
}
