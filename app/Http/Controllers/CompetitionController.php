<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function getCompetition(Request $request)
    {
        $competition = Competition::getLastCompetition();
        return response()->json([
            'message' => 'Competition got successfully',
            'data' => $competition -> name,
        ], 200);
    }

    public function postCompetition(Request $request)
    {
        $competition = Competition::postCompetition($request);
        return response()->json([
            'message' => 'Competition got successfully',
            'data' => $competition,
        ], 200);
    }
}
