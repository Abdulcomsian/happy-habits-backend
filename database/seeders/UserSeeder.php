<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            "name" => "user",
            "username" => "user",
            "email" => "user@gmail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("1234qwer"),
        ];

        $users = User::create($users);
        $users->assignRole('user');
    }
}
