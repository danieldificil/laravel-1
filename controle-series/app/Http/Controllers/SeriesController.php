<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {

//        para redirecionar a outra página: return redirect('https://google.com');
//        existem vários métodos para request, ex: return $request -> get('id');

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

//        return view('serie-list', [
//            'series' => $series
//        ]);
//        ou
//        return view('serie-list', compact('series'));
        return view('series.index')->with('series', $series);
    }

    public function create() {
        return view('series.create');
    }
}


// o objeto Response retorna o tipo Response com corpo, status e cabeçalhos
