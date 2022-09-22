<?php

namespace Database\Factories;

use App\Models\Pipeline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PipelineRoute>
 */
class PipelineRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pipeline_id' => Pipeline::inRandomOrder()->first(),
            'lat' => rand(-90.0, 90.0),
            'long' => rand(-180.0, 180.0),
        ];
    }
}
