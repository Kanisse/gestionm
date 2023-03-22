<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nom' => $this -> faker -> sentence(3),
            'prix' => rand(500, 6000),
            "Id_client" => rand(1,20),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
