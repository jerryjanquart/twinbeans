<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinballMachines;

class UserController extends Controller
{
    public function loginpage(PinballMachines $machine) 
    {
        return view('login', [
            'game' => PinballMachines::all()->where('active', 'true')->first()
        ]);
    }


    public function login(Request $request) { //$request is the incoming fields

        // validate
        $incomingFields = $request->validate([ 
            'email' => 'required',
            'password' => 'required'
        ]);

        // attempt login
        if (auth()->attempt($incomingFields)) { 
            $request->session()->regenerate(); //initiates laravel cookie when successful
            return redirect('/');
        } else { 
            abort(404);
        }
    }


    public function logout() {
        auth()->logout();
        return redirect('/')->with('success', 'You are now logged out.');
    }
}
