<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function photo(Request $request){

        $request->photo->storeAs('public', 'file.jpg');

        return 'Deu Certo';

    }
}
