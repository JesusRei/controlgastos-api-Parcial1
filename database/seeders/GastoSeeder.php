<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gasto;
use App\Models\User;
use App\Models\Categoria;


class GastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gasto::query()->delete();
        User::query()->delete();
        Categoria::query()->delete();

        Categoria::factory(5)->create(); 
        User::factory(5)->create();
        Gasto::factory(20)->create();
    }
}
