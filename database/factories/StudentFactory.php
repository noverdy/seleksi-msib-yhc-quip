<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'nim' => fake()->numerify('################'),
            'prodi' => fake()->jobTitle(),
            'semester' => fake()->randomDigit(),
            'kelas' => strtoupper(fake()->lexify('???-?')),
            'tahun_angkatan' => fake()->year(),
        ];
    }
}
