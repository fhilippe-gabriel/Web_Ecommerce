<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();

        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomFloat(2, 1, 1000),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(720, 720, 'products', true),
            'id_user' => User::pluck('id')->random(),
            'id_categorias' => Categoria::pluck('id')->random(),
        ];
    }
}
