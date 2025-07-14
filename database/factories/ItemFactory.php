<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        //'nom' => $this->faker->word,
       // 'reference' => strtoupper($this->faker->bothify('REF-####')),
       // 'category_id' => \App\Models\Category::inRandomOrder()->first()->id ?? 1,
       // 'quantite' => $this->faker->numberBetween(1, 100),
       // 'date_ajout' => now(),
       // 'statut' => 'Disponible'

        ];
    }
}
