<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'address' => 'ABC Street',
            'phone_number' => 62812345,
            'no_sim' => 12345678,
            'email' => 'johndoe@domain.com',
            'password' => \Hash::make('test1234'),
            'picture' => 'user.png',
            'role_id' => 2
        ]);
    }
}
