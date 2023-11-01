<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SeriesController extends Controller
{
    public function index(Request $request) {

//        para redirecionar a outra página: return redirect('https://google.com');
//        existem vários métodos para request, ex: return $request -> get('id');

//        $series = DB::select('SELECT name FROM series;'); esse é o jeito sem orm para requisições no DB

//        busca simples de lista:
//        $series = Serie::all();


//        query builder:
          $series = Serie::query()->orderBy('name')->get();
//        uma maneira de debugar o código com renderização na view:  dd($series);

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

        //        jeito com query de sql
//        if (DB::insert('INSERT INTO series (name) VALUES (?)', [$serieName])) {
//            return redirect('/series');
//        } else {
//            return "Deu erro";
//        }

        $serieName = $request->input('name');
        $serie = new Serie();
        $serie->name = $serieName;
        $serie->save();
        return redirect('/series');
    }
}


// o objeto Response retorna o tipo Response com corpo, status e cabeçalhos
