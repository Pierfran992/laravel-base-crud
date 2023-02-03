<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MySaints extends Controller
{
    // INDEX
    public function home(){

        $saints = Saint::orderBy('created_at', 'DESC') -> get();

        // $data = [
        //     'saints' => $saints
        // ];

        // return view('pages.home', $data );
        return view('pages.home', compact('saints'));

    }

    // SHOW
    public function show($id) {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saint', $data);
    }

    // DELETE
    public function delete($id){
        $saint = Saint::find($id);
        $saint->delete();
        return redirect()->route('home');
    }

    // CREATE
    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $saint = new Saint();

        $saint -> name = $data['name'];
        $saint -> luogo_di_nascita = $data['luogo_di_nascita'];
        $saint -> data_denedizione = $data['data_denedizione'];
        $saint -> numero_miracoli = $data['numero_miracoli'];

        $saint->save();

        return redirect()->route('home');

    }

}
