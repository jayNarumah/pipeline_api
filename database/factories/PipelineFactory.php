<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PipelineType;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pipeline>
 */
class PipelineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pipeline_type_id' => PipelineType::factory()->create(),
            'company_id' => Company::factory()->create(),
            'name' => $this->faker->name,
            'size' => rand(30.1, 50.34),
            'start_lat' => rand(-90.0, 90.0),
            'end_lat' => rand(-90.0, 90.0),
            'start_long' => rand(-180.0, 180.0),
            'end_long' => rand(-180.0, 180.0),
        ];
    }
}
