<?php

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    protected $model = Produit::class;

    public function definition()
    {
        return [
            'titre' => 'super-héro',
            'description' => 'Un costume inspiré d\'un super-héros populaire.',
            'taille' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'photo' => $this->faker->imageUrl(200, 200),
            'photo2' => $this->faker->imageUrl(200, 200),
            'photo3' => $this->faker->imageUrl(200, 200),
            'categorie' => 'Robe de super-héros',
            'quantite' => $this->faker->numberBetween(10, 100),
        ];
    }
}

