<?php

namespace Database\Seeders;

use App\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goals = [
            ["name" => "Sleep Time", "image" => "sleep.png", "time" => "8 Hours"],
            ["name" => "Screen Time", "image" => "screen.png", "time" => "2 Hours"],
            ["name" => "Workout", "image" => "workout.png", "time" => "2 Hours"],
            ["name" => "Focus Time", "image" => "focus.png", "time" => "01h:45m"],
        ];

        foreach($goals as $goal){
            Goal::create($goal);
        }
    }
}
