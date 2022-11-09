<?php

namespace App\Http\Controllers;

use App\Models\Pipeline;
use App\Models\PipelineRoute;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StorePipelineRequest;
use App\Http\Requests\UpdatePipelineRequest;
use App\Http\Resources\PipelineResource;

class PipelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pipelines = Pipeline::where('is_active', true)->get();
        // $pipelines = PipeLine::all()->load('pipelineType', 'pipelineRoutes', 'company');

        return new PipelineResource($pipelines->load('pipelineType', 'pipelineRoutes', 'company'), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePipelineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePipelineRequest $request)
    {
        if ($request->start_lat < -90.0
        || $request->start_lat > 90.0
        || $request->end_lat < -90.0
        || $request->end_lat > 90.0
        || $request->start_long < -180.0
        || $request->start_long > 180.0
        || $request->end_long < -180.0
        || $request->end_long > 180.0 ) {
            return response()->json('invalid co-ordinate', 403);
        }

        $index = 0;

        $pipeline = Pipeline::create([
            'pipeline_type_id' => $request->pipeline_type_id,
            'company_id' => $request->company_id,
            'name' => $request->name,
            'size' => $request->size,
            'start_lat' => $request->start_lat,
            'start_long' =>$request->start_long,
            'end_lat' => $request->end_lat,
            'end_long' =>$request->end_long,
        ]);

        if ($request->lat && $request->long) {
            foreach ($request->lat as $lat) {
            $pipelineRoute = PipelineRoute::create([
            'pipeline_id' => $pipeline->id,
            'lat' => $request->lat[$index],
            'long' => $request->long[$index],
        ]);

        ++ $index;
        }
        }

        return new PipelineResource($pipeline->load('company'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pipeline  $pipeline
     * @return \Illuminate\Http\Response
     */
    public function show(Pipeline $pipeline)
    {
        return new PipelineResource($pipeline->load('pipelineType', 'pipelineRoutes'), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePipelineRequest  $request
     * @param  \App\Models\Pipeline  $pipeline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePipelineRequest $request, Pipeline $pipeline)
    {
        if ($request->start_lat < -90.0
        || $request->start_lat > 90.0
        || $request->end_lat < -90.0
        || $request->end_lat > 90.0
        || $request->start_long < -180.0
        || $request->start_long > 180.0
        || $request->end_long < -180.0
        || $request->end_long > 180.0 ) {
            return response()->json([
                'error'=> 'invalid number response'], 403);
        }

        $pipeline->pipeline_type_id = $request->pipeline_type_id;
        $pipeline->company_id = $request->company_id;
        $pipeline->name = $request->name;
        $pipeline->size = $request->size;
        $pipeline->start_lat = $request->start_lat;
        $pipeline->start_long = $request->start_long;
        $pipeline->end_lat = $request->end_lat;
        $pipeline->end_long = $request->end_long;
        $pipeline->save();

        return new PipeLineResource($pipeline, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pipeline  $pipeline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pipeline $pipeline)
    {
        // $pipeline->delete();
        $pipeline->is_active = false;
        $pipeline->save();

        return response()->json(['error' => 'Pipeline Record was successfully deleted'], 200);
    }

    // public function filterByType(){
    //     $pipelines = Pipeline::where('pipeline_type_id', request()->pipeline_type_id)->get();

    //     return response()->json($pipelines->load('company', 'pipelineType'));
    // }

    // public function filterByCompany(){
    //     $pipelines = Pipeline::where('company_id', request()->company_id)->get();

    //     return response()->json($pipelines->load('company', 'pipelineType'));
    // }
}