<?php

namespace App\Http\Controllers;

use App\Models\Snacks;
use App\Models\BeanBags;
use App\Models\HotDrinks;
use App\Models\ColdDrinks;
use App\Models\HealthyBites;
use App\Models\LatteFlavors;
use Illuminate\Http\Request;
use App\Models\PinballMachines;

class HotDrinksController extends Controller
{
    public function index() 
    {
        return view('menu.index', [ 
            'beanbags' => BeanBags::all(),
            'healthybites' => HealthyBites::orderBy('name')->get(),
            'snacks' => Snacks::orderBy('name')->get(),
            'colddrinks' => ColdDrinks::orderBy('name')->get(),
            'hotdrinks' => HotDrinks::all(),
            'lattes' => LatteFlavors::orderBy('name')->get(),
            'game' => PinballMachines::all()->where('active', 'true')->first()
        ]);
    }

    public function edit(HotDrinks $hotdrink)
    {
        return view('menu.hotdrinks.edit', [
            'hotdrink' => $hotdrink,
            'game' => PinballMachines::all()->where('active', 'true')->first()
        ]);
    }


    public function update(Hotdrinks $hotdrink)
    {

        request()->validate([
            'small' => 'required',
            'medium' => 'required',
            'large' => 'required'
        ]);

        $hotdrink->update([
            'small' => request('small'),
            'medium' => request('medium'),
            'large' => request('large')
        ]);

        return redirect('/menu')->with('success', 'Menu updated.');    
    
    }



}
