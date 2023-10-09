<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::create([
            'name' => Str::random(5),
            'email' => 'test@posse-ap.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => Str::random(5),
            'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    
    }
}
