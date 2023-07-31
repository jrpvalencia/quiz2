<?php

namespace Database\Factories;
use App\Models\Compañia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compañia>
 */
class CompañiaFactory extends Factory
{
    protected $model = Compañia::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            
            "act_compañia"=>$this->faker->sentence(),
            
        ];
    }
}
