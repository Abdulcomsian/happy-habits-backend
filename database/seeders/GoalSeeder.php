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
            ["name" => "Sleep Time", "image" => "sleep.png", "time" => 480],
            ["name" => "Screen Time", "image" => "screen.png", "time" => 120],
            ["name" => "Workout", "image" => "workout.png", "time" => 120],
            ["name" => "Focus Time", "image" => "focus.png", "time" => 105],
        ];

        foreach($goals as $goal){
            Goal::create($goal);
        }
    }
}
