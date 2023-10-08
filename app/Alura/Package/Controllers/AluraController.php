<?php

namespace App\Alura\Package\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AluraController extends Controller
{
    public function index()
    {
        $series = [
            'the walking dead',
            'the boys',
            'wheel of time'
        ];

        return view('pages.listarSeries', compact('series'));
    }
}
