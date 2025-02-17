<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            ["name" => "flower", "path" => "flower.mp3"],
            ["name" => "music", "path" => "music.mp3"],
            ["name" => "piano", "path" => "piano.mp3"],
            ["name" => "rain", "path" => "rain.mp3"],
            ["name" => "success", "path" => "success.mp3"],
        ];

        foreach($videos as $video){
            Video::create($video);
        }
    }
}
