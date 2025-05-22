<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produk::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->text(255),
            'deskripsi' => $this->faker->text(),
            'gambar' => $this->faker->text(),
            'harga' => $this->faker->text(255),
            'status' => 'aktif',
            'himpunan_id' => \App\Models\Himpunan::factory(),
            'kategori_id' => \App\Models\Kategori::factory(),
        ];
    }
}
