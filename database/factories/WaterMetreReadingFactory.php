<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WaterMetreReading>
 */
class WaterMetreReadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'metre_id' => numberBetween(1,10),
            'reading' => numberBetween(1,1000000000),
            'notes' => Str::random(100)
        ];
    }
}
