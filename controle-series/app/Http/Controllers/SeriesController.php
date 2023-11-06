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
          $successfullyMessage = $request->session()->get('message.success');
//          comm put:
//          $request->session()->forget('message.success');
//        com flash não precisa tratar a destruição do div

//        uma maneira de debugar o código com renderização na view:  dd($series);

//        return view('serie-list', [
//            'series' => $series
//        ]);
//        ou
//        return view('serie-list', compact('series'));
        return view('series.index')->with('series', $series)->with('successfullyMessage', $successfullyMessage);
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

//        jeito verboso
//        $serieName = $request->name;
//        $serie = new Serie();
//        $serie->name = $serieName;
//        $serie->save();

        $serie = Serie::create($request->all());
        return to_route('series.index')
            ->with('message.success', "The serie '{$serie->name}' created successfully");
    }

//    Jeito 1
//    public function destroy(Request $request) {
//
//    Serie::destroy($request->series);
//    $request->session()->flash('message.success', "The serie removed successfully");
//
//    return to_route('series.index');
//    }

//    Jeito 2
//    public function destroy(Serie $series, Request $request) {
//
//    $series->delete();
//    Serie::destroy($request->series);
//    $request->session()->flash('message.success', "The serie '{$series->name}' removed successfully");
//
//    return to_route('series.index');
//    }
//    jeito 3 :
    public function destroy(Serie $series, Request $request) {

        $series->delete();
        Serie::destroy($request->series);
        return to_route('series.index')
            ->with('message.success', "The serie '{$series->name}' removed successfully");
    }

    public function edit(Serie $series, Request $request) {

        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, Request $request) {
        $series->update();
        Serie::updated($request->series);
        return to_route('series.index')
            ->with('message.success', "The serie '{$series->name}' updated successfully");
    }


}


// o objeto Response retorna o tipo Response com corpo, status e cabeçalhos
