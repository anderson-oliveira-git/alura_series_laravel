<?php

namespace App\Alura\Package\Routes;

use App\Alura\Package\Controllers\AluraController;
use Illuminate\Support\Facades\Route;


class Routes 
{
    static public function alura()
    {
        Route::get('/', [AluraController::class, 'index'])->name('index');
    }
}