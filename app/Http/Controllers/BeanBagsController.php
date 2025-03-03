<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeanBags;
use App\Models\PinballMachines;

class BeanBagsController extends Controller
{
    
    
    public function edit(BeanBags $beanbag)
    {
        return view('menu.beanbags.edit', [
            'beanbag' => $beanbag,
            'game' => PinballMachines::all()->where('active', 'true')->first()
        ]);
    }
    
    
    public function update(BeanBags $beanbag)
    {

        request()->validate([
            'cost' => 'required'
        ]);

        $beanbag->update([
            'cost' => request('cost')
        ]);

        return redirect('/menu')->with('success', 'Menu updated.');    
    
    }
    
}
