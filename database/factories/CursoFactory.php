<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    //convencion, se necesita que el nombre del factory tiene que ser Curso del modelo + Factory y ya esta enlazado al modelo

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement($array=['Diseño web','Desarrollo web'])
        ];
    }
}
