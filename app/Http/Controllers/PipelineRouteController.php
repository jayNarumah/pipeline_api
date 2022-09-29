<?php

namespace App\Http\Controllers;

use App\Models\PipelineRoute;
use App\Http\Requests\StorePipelineRouteRequest;
use App\Http\Requests\UpdatePipelineRouteRequest;
use App\Http\Resources\PipelineRouteResource;

class PipelineRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = PipelineRoute::all();

        return new PipelineRouteResource($routes, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePipelineRouteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePipelineRouteRequest $request)
    {
        if ($request->lat < -90.0
        || $request->lat > 90.0
        || $request->long < -180.0
        || $request->long > 180.0 ) {
            return response()->json([
                'error'=> 'invalid number response'], 403);
        }
        $route = PipelineRoute::create([
            'pipeline_id' => $request->pipeline_id,
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return new PipelineRouteResource($route, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PipelineRoute  $pipelineRoute
     * @return \Illuminate\Http\Response
     */
    public function show(PipelineRoute $pipelineRoute)
    {
        return new PipelineRouteResource($route, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePipelineRouteRequest  $request
     * @param  \App\Models\PipelineRoute  $pipelineRoute
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePipelineRouteRequest $request, PipelineRoute $pipelineRoute)
    {
        $pipelineRoute->pipeline_id = $request->pipeline_id;
        $pipelineRoute->lat = $request->lat;
        $pipelineRoute->long = $request->long;
        $pipelineRoute->save();
        return new PipelineRouteResource($pipelineRoute, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PipelineRoute  $pipelineRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(PipelineRoute $pipelineRoute)
    {
        $pipelineRoute->delete();

        return new PipelineRouteResource('Record was Successfully Deleted', 200);
    }
}
