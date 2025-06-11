<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MustBeLoggedIn;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SnacksController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\BeanBagsController;
use App\Http\Controllers\HotDrinksController;
use App\Http\Controllers\ColdDrinksController;
use App\Http\Controllers\TeaFlavorsController;
use App\Http\Controllers\HealthyBitesController;
use App\Http\Controllers\LatteFlavorsController;
use App\Http\Controllers\PinballMachinesController;

Route::get('/', [PinballMachinesController::class, 'homepage']);
Route::patch('/{special}', [SpecialController::class, 'update']);


Route::get('/login', [UserController::class, 'loginpage']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);


Route::controller(PinballMachinesController::class)->group(function() {
    Route::get('/machines', 'index')->middleware(MustBeLoggedIn::class);
    Route::post('/machines', 'store')->middleware(MustBeLoggedIn::class);
    Route::get('/machines/{machine:slug}', 'show');
    Route::get('/machines/{machine:slug}/edit', 'edit')->middleware(MustBeLoggedIn::class);
    Route::patch('/machines/{machine:slug}/edit', 'update')->middleware(MustBeLoggedIn::class);
    Route::delete('/machines/{machine:slug}', 'destroy')->middleware(MustBeLoggedIn::class);
});



Route::controller(HotDrinksController::class)->group(function() {
    Route::get('/menu', 'index');
    Route::get('/menu/hotdrinks/{hotdrink}/edit', 'edit')->middleware(MustBeLoggedIn::class);
    Route::patch('/menu/hotdrinks/{hotdrink}/edit', 'update')->middleware(MustBeLoggedIn::class);
});


Route::controller(BeanBagsController::class)->group(function() {
    Route::post('/menu/beanbags', 'store')->middleware(MustBeLoggedIn::class);
    Route::get('/menu/beanbags/{beanbag}/edit', 'edit')->middleware(MustBeLoggedIn::class);
    Route::patch('/menu/beanbags/{beanbag}/edit', 'update')->middleware(MustBeLoggedIn::class);
});



Route::controller(LatteFlavorsController::class)->group(function() {
    Route::post('/menu/latte-flavor', 'store')->middleware(MustBeLoggedIn::class);
    Route::delete('/menu/latte-flavor/{flavor}', 'destroy')->middleware(MustBeLoggedIn::class);
});

Route::controller(ColdDrinksController::class)->group(function() {
    Route::post('/menu/cold-drink', 'store')->middleware(MustBeLoggedIn::class);
    Route::delete('/menu/cold-drink/{colddrink}', 'destroy')->middleware(MustBeLoggedIn::class);
});

Route::controller(SnacksController::class)->group(function() {
    Route::post('/menu/snack', 'store')->middleware(MustBeLoggedIn::class);
    Route::delete('/menu/snack/{snack}', 'destroy')->middleware(MustBeLoggedIn::class);
});

Route::controller(HealthyBitesController::class)->group(function() {
    Route::post('/menu/healthy-bite', 'store')->middleware(MustBeLoggedIn::class);
    Route::delete('/menu/healthy-bite/{healthybite}', 'destroy')->middleware(MustBeLoggedIn::class);
});

Route::controller(TeaFlavorsController::class)->group(function() {
    Route::post('/menu/tea-flavor', 'store')->middleware(MustBeLoggedIn::class);
    Route::delete('/menu/tea-flavor/{teaflavor}', 'destroy')->middleware(MustBeLoggedIn::class);
});