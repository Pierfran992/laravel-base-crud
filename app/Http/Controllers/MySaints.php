<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MySaints extends Controller
{
    // INDEX
    public function home(){

        $saints = Saint::all();

        $data = [
            'saints' => $saints
        ];

        return view('pages.home', $data );

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
}
