<?php

namespace App\Http\Controllers;

use App\Models\PipelineType;
use App\Http\Requests\StorePipelineTypeRequest;
use App\Http\Requests\UpdatePipelineTypeRequest;
use App\Http\Resources\PipelineTypeResource;

class PipelineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PipelineTypeResource(PipelineType::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePipelineTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePipelineTypeRequest $request)
    {
        $type = PipeLineType::create([
            'name' => $request->name,
        ]);

        return new PipelineTypeResource($type, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PipelineType  $pipelineType
     * @return \Illuminate\Http\Response
     */
    public function show(PipelineType $pipelineType)
    {
        return new PipelineTypeResource($type, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePipelineTypeRequest  $request
     * @param  \App\Models\PipelineType  $pipelineType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePipelineTypeRequest $request, PipelineType $pipelineType)
    {
        $pipelineType->name = $request->name;
        $pipelineType->save();

        return new PipelineTypeResource($pipelineType, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PipelineType  $pipelineType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PipelineType $pipelineType)
    {
        $pipelineType->delete();
    }
}
