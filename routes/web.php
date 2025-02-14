<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('principal');    
});


Route::get('/mapa', function (Request $request) {
    return PrincipalController::index($request);    
});

