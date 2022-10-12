<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        return Activity::all();
    }

    public function show($id) {
        return Activity::find($id);
    }

    /**
     * Dynamisch voor alle zoekopdrachten
     * 
     * @param string $searchType 
     * @param string|int $searchValue
     * @return Illuminate\Http\Response;
     */
    public function search($searchType, $searchValue) {
        return match ($searchType) {
            'type' => $this->searchType($searchValue),
            'date' => $this->searchDate($searchValue),
            'program_id' => $this->searchProgramId($searchValue)
        };
    }

    /**
     * Zoeken bij program_id
     * 
     * @param int $program_id
     * @return Illuminate\Http\Response;
     */
    private function searchProgramId($program_id) {
        return Activity::where('program_id', $program_id)->with('program')->get();
    }

    /**
     * Zoeken bij type
     * 
     * @param str $type
     * @return Illuminate\Http\Response;
     */
    private function searchType($type) {
        return Activity::where('activity_type', $type)
            ->select('activities.*', 'programs.program_title', 'programs.program_description', 'programs.program_type')
            ->join('programs', 'activities.program_id', '=', 'programs.id')
            ->get();
    }

    /**
     * Zoeken bij datum
     * 
     * @param str $date
     * @return Illuminate\Http\Response;
     */
    private function searchDate($date) {
        return Activity::where('activity_date', $date)
            ->select('activities.*', 'programs.program_title', 'programs.program_description', 'programs.program_type')
            ->join('programs', 'activities.program_id', '=', 'programs.id')
            ->get();
    }


    public function store(ActivityRequest $request) {
        return Activity::create($request->validated());
    }

    public function update(Request $request, $id) {
        $activity = Activity::find($id);
        $activity->update($request->all());

        return $activity;
    }

    public function destroy($id) {
        return Activity::destroy($id);
    }
}
