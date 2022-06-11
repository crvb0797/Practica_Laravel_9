<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* Llave foranea con datos falsos */
            'user_id' => $this->faker->randomElement([1, 2]),
            'title' => $title = $this->faker->sentence(), //Creamos la variable para el titulo
            'slug' => Str::slug($title), //Usamos el método slug de la clase Str para convertir el titulo en URL amigable
            'body' => $this->faker->text(420),

        ];
    }
}
