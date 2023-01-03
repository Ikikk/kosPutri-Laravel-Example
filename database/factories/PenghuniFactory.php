<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PenghuniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
            'nama' => fake()->name(),
            'alamatAsal' => fake()->address(),
            'noTelp' => fake()->numerify('############')
            // 'nomorKamar' => fake()->randomDigitNotNull()
        ];
    }
}
