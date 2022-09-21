<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WaterMetreReading;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WaterMRFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = WaterMetreReading::class;

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
