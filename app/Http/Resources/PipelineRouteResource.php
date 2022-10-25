<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PipelineRouteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'id' => this->id,
        //     'lat' => this->lat,
        //     'long' => this->long,
        //     'pipeline_id' => this->pipeline_id,
            // pipelines[
            // ],
        // ];
    }
}