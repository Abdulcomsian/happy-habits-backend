<?php

namespace Database\Seeders;

use App\Models\FaceColor;
use App\Models\Glass;
use App\Models\Hair;
use App\Models\Shirt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // FaceColors
        $colors = [
            ["code" => "#2D2317"],
            ["code" => "#2D2017"],
            ["code" => "#2D1918"],
            ["code" => "#E3C088"],
            ["code" => "#E3B788"],
            ["code" => "#F2E1C3"],

            ["code" => "#573823"],
            ["code" => "#552D25"],
            ["code" => "#552D25"],
            ["code" => "#E1A895"],
            ["code" => "#EDC399"],
            ["code" => "#F4DEC5"],

            ["code" => "#72593B"],
            ["code" => "#79563A"],
            ["code" => "#74453B"],
            ["code" => "#EBBAA7"],
            ["code" => "#F3DCBC"],
            ["code" => "#F1D6BB"],

            ["code" => "#886E49"],
            ["code" => "#8A6646"],
            ["code" => "#8C5F4C"],
            ["code" => "#F2CFBB"],
            ["code" => "#EDC399"],
            ["code" => "#F1D6BB"],

            ["code" => "#A98A5C"],
            ["code" => "#A8805D"],
            ["code" => "#A27162"],
            ["code" => "#FAE3DD"],
            ["code" => "#EDC399"],
            ["code" => "#F1D6BB"],
        ];

        foreach($colors as $color){
            FaceColor::create($color);
        }

        // Hairs
        $hairs = [
            ["image" => "group-null.png"],
            ["image" => "second_image.png"],
            ["image" => "third_image.png"],
            ["image" => "fourth_image.png"],
            ["image" => "fifth_image.png"],
            ["image" => "sixth_image.png"],
            ["image" => "seventh_image.png"],
            ["image" => "eigth_image.png"],
            ["image" => "ninth_image.png"],
            ["image" => "tenth_image.png"],
        ];

        foreach($hairs as $hair){
            Hair::create($hair);
        }


        // shirts
        $shirts = [
            ["image" => "group-null.png"],
            ["image" => "second_image.png"],
            ["image" => "third_image.png"],
            ["image" => "fourth_image.png"],
            ["image" => "fifth_image.png"],
            ["image" => "sixth_image.png"],
            ["image" => "seventh_image.png"],
            ["image" => "eigth_image.png"],
            ["image" => "ninth_image.png"],
            ["image" => "tenth_image.png"],
        ];

        foreach($shirts as $shirt){
            Shirt::create($shirt);
        }

        // Glasses
        $glasses = [
            ["image" => "group-null.png"],
            ["image" => "second_image.png"],
            ["image" => "third_image.png"],
            ["image" => "fourth_image.png"],
            ["image" => "fifth_image.png"],
            ["image" => "sixth_image.png"],
            ["image" => "seventh_image.png"],
            ["image" => "eigth_image.png"],
        ];

        foreach($glasses as $glass){
            Glass::create($glass);
        }
    }
}
