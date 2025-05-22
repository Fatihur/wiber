<?php

namespace Database\Seeders;

use App\Models\Himpunan;
use Illuminate\Database\Seeder;

class HimpunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Himpunan::factory()
            ->count(5)
            ->create();
    }
}
