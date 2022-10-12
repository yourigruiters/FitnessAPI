<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExerciseRequest;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller
{
    public function index() {
        return Exercise::all();
    }

    public function show($id) {
        return Exercise::find($id);
    }

    /**
     * Zoeken bij titel
     * 
     * @param str $title
     * @return Illuminate\Http\Response;
     */
    public function search($title) {
        return Exercise::where('exercise_title', $title)->get();
    }

    /**
     * Weergeven alle titels van exercises
     * 
     * @return Illuminate\Http\Response;
     */
    public function pluck() {
        return Exercise::pluck('exercise_title');
    }

    public function store(ExerciseRequest $request) {
        return Exercise::create($request->validated());
    }

    public function update(Request $request, $id) {
        $exercise = Exercise::find($id);
        $exercise->update($request->all());

        return $exercise;
    }

    public function destroy($id) {
        return Exercise::destroy($id);
    }
}
