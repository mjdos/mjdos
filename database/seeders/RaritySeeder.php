<?php

namespace Database\Seeders;

use App\Models\Nft;
use App\Models\Rarity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaritySeeder extends Seeder
{
    public function run(): void
    {
        Rarity::create(['nome' => 'SUPER RARE']);
        Rarity::create(['nome' => 'RARE']);
        Rarity::create(['nome' => 'COMMON']);
    }
}
