<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SeriesController extends Controller
{
    public function index(Request $request) {

//        para redirecionar a outra página: return redirect('https://google.com');
//        existem vários métodos para request, ex: return $request -> get('id');

        $series = DB::select('SELECT name FROM series;');
        dd($series);

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

    public function store(Request $request) {

        $serieName = $request->input('name');

        if (DB::insert('INSERT INTO series (name) VALUES (?)', [$serieName])) {
            return "OK";
        } else {
            return "Deu erro";
        }
    }
}


// o objeto Response retorna o tipo Response com corpo, status e cabeçalhos
