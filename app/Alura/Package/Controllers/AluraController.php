<?php

namespace App\Alura\Package\Controllers;

use App\Alura\Package\Models\Serie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AluraController extends Controller
{
    public function index()
    {
        $series = Serie::all();

        return view('pages.listarSeries', compact('series'));
    }

    public function create()
    {
        return view('pages.createSerie');
    }

    public function store(Request $request)
    {
        $name = $request->input('serie_name');

        $serie = new Serie();
        $serie->name = $name;
        $serie->save();

        return redirect('/');
    }
}
