<?php

namespace Database\Seeders;

use App\Models\Tache;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tache::factory(3)
        ->sequence(
            [
                'starts_at' => now()->setTime(9, 0),
                'ends_at' => now()->setTime(10, 0),
            ],
            [
                'starts_at' => now()->setTime(10, 0),
                'ends_at' => now()->setTime(11, 0),
            ],
            [
                'starts_at' => now()->setTime(14, 0),
                'ends_at' => now()->setTime(16, 0),
            ],
        )
        ->create();
    }
}
