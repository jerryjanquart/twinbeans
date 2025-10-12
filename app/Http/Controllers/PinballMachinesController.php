<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;
use App\Models\PinballMachines;

class PinballMachinesController extends Controller
{
    //for home view
    public function homepage() 
    {
        return view('home', [ 
            'special' => Special::get()->first(),
            'machines' => PinballMachines::orderBy('name', 'asc')->where('active','true')->get(),
            'game' => PinballMachines::orderBy('name', 'asc')->where('active', 'true')->first(),
            'url' => \Request::getRequestUri()
        ]);
    }



    //for machines view
    public function index() 
    {
        return view('machines.index', [ 
            'game' => PinballMachines::orderBy('name', 'asc')->where('active', 'true')->first(),
            'machines' => PinballMachines::orderBy('name', 'asc')->where('active','true')->get(),
            'allMachines' =>PinballMachines::orderBy('active', 'desc')->get(),
            'url' => \Request::getRequestUri()
        ]);
    }

    public function store() 
    {
        
        $incomingFields = request()->validate([
            'name' => 'required',
            'slug' => 'required',
            'year' => 'required',
            'manufacturer' => 'required',
            'headline' => 'required',
            'about' => 'required',
            'active' => 'nullable'
        ]);

        $name = request('name');

        PinballMachines::create($incomingFields);
    
        return redirect('/machines')->with('success', $name . ' has been added.');

    }

    public function show(PinballMachines $machine)
    {
        return view('machines.show', [
            'game' => PinballMachines::orderBy('name', 'asc')->where('active', 'true')->first(),
            'machines' => PinballMachines::orderBy('name', 'asc')->where('active','true')->get(),
            'machine' => $machine,
            'url' => \Request::getRequestUri(),

            //https://dcblog.dev/laravel-get-previous-and-next-record
            'next' => PinballMachines::where('active', 'true')
            ->where('id', '>', $machine->id)
            ->orderBy('id')->first(),
            'previous' => PinballMachines::where('active', 'true')
            ->where('id', '<', $machine->id)
            ->orderBy('id','desc')->first()
            
        ],
    );
    }

    public function edit(PinballMachines $machine)
    {
        return view('machines.edit', [ 
            'game' => PinballMachines::orderBy('name', 'asc')->where('active', 'true')->first(),
            'machine' => $machine]);
    }

    public function destroy(PinballMachines $machine) { 
        
        $machine->delete();
        $name = $machine->name;
        return redirect('/machines')->with('success', $name . ' has been deleted.');
    
    }

    public function update(PinballMachines $machine)
    {

        request()->validate([
            'name' => 'required',
            'slug' => 'required',
            'year' => 'required',
            'manufacturer' => 'required',
            'headline' => 'required',
            'about' => 'required',
            'active' => 'required'
        ]);

        $name = request('name');
        $slug = request('slug');

        $machine->update([
            'name' => request('name'),
            'slug' => request('slug'),
            'year' => request('year'),
            'manufacturer' => request('manufacturer'),
            'headline' => request('headline'),
            'about' => request('about'),
            'active' => request('active'),
        ]);

        return redirect('/machines/'. $slug)->with('success', $name . '  updated.');
    }

}