<?php

use Illuminate\Support\Facades\Route;
use App\Model\Usuario;

Route::get('/', function () {
    $usuario = Usuario::find(2);
    $title = 'Dashboard';
    return view('painel.pages.dashboard', compact('title', 'usuario'));
});
