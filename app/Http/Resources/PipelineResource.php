<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PipelineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         return parent::toArray($request); //[
        //     'id' => $this->id,
        //     'name' => $this->name,
        //     'size' => $this->size,
        //     'start_lat' => $this->start_lat,
        //     'start_long' => $this->start_long,
        //     'end_lat' => $this->end_lat,
        //     'end_long' => $this->end_long,
        //     'pipeline_routes' => PipelineRouteCollection::make($this->whenLoaded('pipelineRoutes')),
        //     // 'pipeline_type' => PipelineTypeCollection::make($this->whenLoaded('pipelineType')),
        // ];
    }
}