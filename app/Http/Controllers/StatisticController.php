<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pipeline;
use App\Models\Company;
use App\Models\PipelineType;

class StatisticController extends Controller
{
    function pipelineCount()
    {
        $count = Pipeline::count();

        return response()->json($count, 200);
    }

    function pipelineTypeCount()
    {
        $count = PipelineType::count();

        return response()->json($count, 200);
    }

    function companyCount()
    {
        $count = Company::count();

        return response()->json($count, 200);
    }
}