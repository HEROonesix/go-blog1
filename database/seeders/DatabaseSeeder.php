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

        \App\Models\User::factory()->create([
            'name' => 'Administrator User',
            'email' => 'admin@admin.com',
        ]);

        \App\Models\Setting::create([
            'key'   => 'no_hp',
            'value' => '+62 811 2233 4455',
        ]);

        \App\Models\Setting::create([
            'key'   => 'email',
            'value' => 'admin@admin.com',
        ]);

        \App\Models\Setting::create([
            'key'   => 'alamat',
            'value' => 'APT. Pranoto St, Samarinda',
        ]);
    }
}
