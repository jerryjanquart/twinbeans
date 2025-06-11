<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeanBags;
use App\Models\PinballMachines;

class BeanBagsController extends Controller
{
    
    public function store() 
    {
        
        $incomingFields = request()->validate([
            'blend' => 'required',
            'cost' => 'required',
            'oz' => 'required'
        ]);

        $blend = request('blend');

        BeanBags::create($incomingFields);
    
        return redirect('/menu')->with('success', $blend . ' has been added.');

    }
    
    public function edit(BeanBags $beanbag) //displays form to edit
    {
        return view('menu.beanbags.edit', [
            'beanbag' => $beanbag,
            'game' => PinballMachines::all()->where('active', 'true')->first()
        ]);
    }
    
    
    public function update(BeanBags $beanbag)
    {

        request()->validate([
            'blend' => 'required',
            'oz' => 'required',
            'cost' => 'required'
        ]);

        $beanbag->update([
            'blend' => request('blend'),
            'oz' => request('oz'),
            'cost' => request('cost')
        ]);

        return redirect('/menu')->with('success', 'Menu updated.');    
    
    }
    
    
}
