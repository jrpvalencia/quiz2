<?php

namespace Database\Factories;
use App\Models\CuerpoEsp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CuerpoE>
 */
class CuerpoEspFactory extends Factory
{
    protected $model = CuerpoEsp::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "denominacion"=>$this->faker->sentence(),
        ];
    }
}
