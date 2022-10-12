<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightRequest;
use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function index() {
        return Weight::all();
    }

    public function show($id) {
        return Weight::find($id);
    }

    /**
     * Zoeken bij datum
     * 
     * @param str $date
     * @return Illuminate\Http\Response;
     */
    public function search($date) {
        return Weight::where('date', $date)->get();
    }

    public function store(weightRequest $request) {
        return Weight::create($request->validated());
    }

    public function update(Request $request, $id) {
        $weight = Weight::find($id);
        $weight->update($request->all());

        return $weight;
    }

    public function destroy($id) {
        return Weight::destroy($id);
    }
}
