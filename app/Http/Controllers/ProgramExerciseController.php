<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramExercise;
use Illuminate\Http\Request;

class ProgramExerciseController extends Controller
{
    /**
     * Zoeken bij program (Eager loading)
     * 
     * @param Program $program
     * @return Illuminate\Http\Response;
     */
    public function search(Program $program) {
        // HasManyThrough gebruiken -> Aanpassen van ProgramExercises en Exercise tabel volgens documentatie
    }
}
