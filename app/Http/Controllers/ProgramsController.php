<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index() {
        return Program::all();
    }

    public function store(programRequest $request) {
        return Program::create($request->validated());
    }

    public function update(Request $request, $id) {
        $program = Program::find($id);
        $program->update($request->all());

        return $program;
    }

    public function destroy($id) {
        return Program::destroy($id);
    }
}
