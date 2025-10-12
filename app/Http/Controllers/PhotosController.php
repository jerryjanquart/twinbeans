<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinballMachines;

class PhotosController extends Controller
{
    public function index() 
    {
        return view('photos.index', [ 
            'game' => PinballMachines::all()->where('active', 'true')->first(),
        ]);
    }
}