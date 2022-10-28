<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pipeline;
use App\Models\Company;
use App\Models\pipelineType;

class StatisticController extends Controller
{
    function pipelineCount()
    {
        $count = Pipeline::all()->count();

        return response()->json($count, 200);
    }

    function pipelineTypeCount()
    {
        $count = PipelineType::all()->count();

        return response()->json($count, 200);
    }

    function companyCount()
    {
        $count = Company::all()->count();

        return response()->json($count, 200);
    }
}