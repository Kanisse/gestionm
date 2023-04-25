<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "Nom" => $this -> faker -> lastName(),
            "Prenom" => $this -> faker -> firstName(),
            "Tel" => $this -> faker -> phoneNumber(),
            "adresse" => $this -> faker -> address(),
            "photo" => $this -> faker -> image(storage_path('images'),100,100,null, false),
            "created_at" => now(),
            "updated_at" => now() 
        ];
    }
}
