<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            "name" => "admin",
            "username" => "admin",
            "email" => "admin@gmail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("password"),
        ];

        $admin = User::create($admin);
        $admin->assignRole('admin');
    }
}
