<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Siswa::create([
            'nama' => 'Anri',
            'npm' => '20201310001',
            'kelas' => 'informatika',
        ]);
        \App\Models\Siswa::create([
            'nama' => 'Gilang',
            'npm' => '20201310002',
            'kelas' => 'informatikaB',
        ]);
        \App\Models\Siswa::create([
            'nama' => 'Fadhlan',
            'npm' => '20201310003',
            'kelas' => 'informatikaC',
        ]);
    }
}
