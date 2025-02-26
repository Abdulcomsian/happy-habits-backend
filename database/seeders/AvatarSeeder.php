<?php

namespace Database\Seeders;

use App\Models\Accessory;
use App\Models\Beard;
use App\Models\Cloth;
use App\Models\Eye;
use App\Models\Eyebrow;
use App\Models\FaceColor;
use App\Models\FaceShape;
use App\Models\Glass;
use App\Models\Hair;
use App\Models\Hat;
use App\Models\Lip;
use App\Models\Nose;
use App\Models\Shirt;
use App\Models\Shoe;
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

        // Accessories
        $accessories = [
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],

            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "female", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "female", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "female", "image" => "5.svg"],
            ["element_id" => "Layer 299ldpi", "gender" => "female", "image" => "Layer 299ldpi.svg"],
        ];

        foreach($accessories as $item){
            Accessory::create($item);
        }

        // Beards
        $beards = [
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "male", "image" => "6.svg"],
            ["element_id" => 7, "gender" => "male", "image" => "7.svg"],
            ["element_id" => 8, "gender" => "male", "image" => "8.svg"],
            ["element_id" => 9, "gender" => "male", "image" => "9.svg"],
        ];

        foreach($beards as $item){
            Beard::create($item);
        }


        // Clothes
        $clothes = [
            ["element_id" => 0, "gender" => "male", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "male", "image" => "6.svg"],
            ["element_id" => 8, "gender" => "male", "image" => "8.svg"],
            ["element_id" => 9, "gender" => "male", "image" => "9.svg"],

            ["element_id" => 0, "gender" => "female", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "female", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "female", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "female", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "female", "image" => "6.svg"],
            ["element_id" => 7, "gender" => "female", "image" => "7.svg"],
            ["element_id" => 9, "gender" => "female", "image" => "9.svg"],
            ["element_id" => 18, "gender" => "female", "image" => "18.svg"],
            ["element_id" => "Layer 132ldpi", "gender" => "female", "image" => "Layer 132ldpi.svg"],
        ];

        foreach($clothes as $item){
            Cloth::create($item);
        }

        // EyeBrows
        $eyebrows = [
            ["element_id" => 0, "gender" => "male", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],
            ["element_id" => 15, "gender" => "male", "image" => "15.svg"],
            ["element_id" => 16, "gender" => "male", "image" => "16.svg"],
            ["element_id" => 17, "gender" => "male", "image" => "17.svg"],
            ["element_id" => 18, "gender" => "male", "image" => "18.svg"],
            ["element_id" => 19, "gender" => "male", "image" => "19.svg"],
            ["element_id" => 27, "gender" => "male", "image" => "27.svg"],
            ["element_id" => 28, "gender" => "male", "image" => "28.svg"],
            ["element_id" => 29, "gender" => "male", "image" => "29.svg"],
            ["element_id" => 30, "gender" => "male", "image" => "30.svg"],
            ["element_id" => 31, "gender" => "male", "image" => "31.svg"],
            ["element_id" => 32, "gender" => "male", "image" => "32.svg"],
            ["element_id" => 33, "gender" => "male", "image" => "33.svg"],
            ["element_id" => 34, "gender" => "male", "image" => "34.svg"],
            ["element_id" => 40, "gender" => "male", "image" => "40.svg"],
            ["element_id" => 41, "gender" => "male", "image" => "41.svg"],
            ["element_id" => 42, "gender" => "male", "image" => "42.svg"],
            ["element_id" => 43, "gender" => "male", "image" => "43.svg"],

            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
            ["element_id" => 6, "gender" => "female", "image" => "6.svg"],
            ["element_id" => 7, "gender" => "female", "image" => "7.svg"],
            ["element_id" => 11, "gender" => "female", "image" => "11.svg"],
            ["element_id" => 12, "gender" => "female", "image" => "12.svg"],
            ["element_id" => 15, "gender" => "female", "image" => "15.svg"],
            ["element_id" => 17, "gender" => "female", "image" => "17.svg"],
            ["element_id" => 20, "gender" => "female", "image" => "20.svg"],
            ["element_id" => 22, "gender" => "female", "image" => "22.svg"],
            ["element_id" => 25, "gender" => "female", "image" => "25.svg"],
            ["element_id" => 27, "gender" => "female", "image" => "27.svg"],
            ["element_id" => 30, "gender" => "female", "image" => "30.svg"],
            ["element_id" => 32, "gender" => "female", "image" => "32.svg"],
        ];

        foreach($eyebrows as $item){
            Eyebrow::create($item);
        }

        // Eyes
        $eyes = [
            ["element_id" => 0, "gender" => "male", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],
            ["element_id" => 12, "gender" => "male", "image" => "12.svg"],
            ["element_id" => 13, "gender" => "male", "image" => "13.svg"],
            ["element_id" => 14, "gender" => "male", "image" => "14.svg"],
            ["element_id" => 15, "gender" => "male", "image" => "15.svg"],
            ["element_id" => 16, "gender" => "male", "image" => "16.svg"],
            ["element_id" => 17, "gender" => "male", "image" => "17.svg"],
            ["element_id" => 18, "gender" => "male", "image" => "18.svg"],
            ["element_id" => 19, "gender" => "male", "image" => "19.svg"],
            ["element_id" => 20, "gender" => "male", "image" => "20.svg"],
            ["element_id" => 26, "gender" => "male", "image" => "26.svg"],
            ["element_id" => 27, "gender" => "male", "image" => "27.svg"],
            ["element_id" => 28, "gender" => "male", "image" => "28.svg"],
            ["element_id" => 29, "gender" => "male", "image" => "29.svg"],
            ["element_id" => 30, "gender" => "male", "image" => "30.svg"],


            ["element_id" => 0, "gender" => "female", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "female", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "female", "image" => "4.svg"],
            ["element_id" => 6, "gender" => "female", "image" => "6.svg"],
        ];

        foreach($eyes as $item){
            Eye::create($item);
        }


        // Faceshapes
        $faceShapes = [
            ["element_id" => 0, "gender" => "male", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "male", "image" => "6.svg"],
            ["element_id" => 7, "gender" => "male", "image" => "7.svg"],
            ["element_id" => 8, "gender" => "male", "image" => "8.svg"],
            ["element_id" => 9, "gender" => "male", "image" => "9.svg"],
            ["element_id" => 10, "gender" => "male", "image" => "10.svg"],
            ["element_id" => 11, "gender" => "male", "image" => "11.svg"],
            ["element_id" => 15, "gender" => "male", "image" => "15.svg"],
            ["element_id" => 17, "gender" => "male", "image" => "17.svg"],
            ["element_id" => 123, "gender" => "male", "image" => "123.svg"],


            ["element_id" => 0, "gender" => "female", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "female", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "female", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "female", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "female", "image" => "6.svg"],
            ["element_id" => 7, "gender" => "female", "image" => "7.svg"],
            ["element_id" => 8, "gender" => "female", "image" => "8.svg"],
            ["element_id" => 9, "gender" => "female", "image" => "9.svg"],
            ["element_id" => 10, "gender" => "female", "image" => "10.svg"],
            ["element_id" => 11, "gender" => "female", "image" => "11.svg"],
            ["element_id" => 15, "gender" => "female", "image" => "15.svg"],
            ["element_id" => 17, "gender" => "female", "image" => "17.svg"],
            ["element_id" => 123, "gender" => "female", "image" => "123.svg"],
        ];

        foreach($faceShapes as $item){
            FaceShape::create($item);
        }


        // Hairs
        $hairs = [
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "male", "image" => "6.svg"],
            ["element_id" => 8, "gender" => "male", "image" => "8.svg"],
            ["element_id" => 10, "gender" => "male", "image" => "10.svg"],
            ["element_id" => 11, "gender" => "male", "image" => "11.svg"],
            ["element_id" => 12, "gender" => "male", "image" => "12.svg"],
            ["element_id" => 15, "gender" => "male", "image" => "15.svg"],
            ["element_id" => 16, "gender" => "male", "image" => "16.svg"],
            ["element_id" => 17, "gender" => "male", "image" => "17.svg"],
            ["element_id" => 18, "gender" => "male", "image" => "18.svg"],
            ["element_id" => 19, "gender" => "male", "image" => "19.svg"],
            ["element_id" => 20, "gender" => "male", "image" => "20.svg"],
            ["element_id" => 22, "gender" => "male", "image" => "22.svg"],
            ["element_id" => 23, "gender" => "male", "image" => "23.svg"],
            ["element_id" => 24, "gender" => "male", "image" => "24.svg"],
            ["element_id" => 26, "gender" => "male", "image" => "26.svg"],
            ["element_id" => 27, "gender" => "male", "image" => "27.svg"],
            ["element_id" => 29, "gender" => "male", "image" => "29.svg"],
            ["element_id" => 30, "gender" => "male", "image" => "30.svg"],
            ["element_id" => 31, "gender" => "male", "image" => "31.svg"],
            ["element_id" => 34, "gender" => "male", "image" => "34.svg"],
            ["element_id" => 35, "gender" => "male", "image" => "35.svg"],
            ["element_id" => 36, "gender" => "male", "image" => "36.svg"],
            ["element_id" => 37, "gender" => "male", "image" => "37.svg"],
            ["element_id" => 38, "gender" => "male", "image" => "38.svg"],
            ["element_id" => 39, "gender" => "male", "image" => "39.svg"],
            ["element_id" => 52, "gender" => "male", "image" => "52.svg"],
            ["element_id" => 55, "gender" => "male", "image" => "55.svg"],



            ["element_id" => 0, "gender" => "female", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => "6-8", "gender" => "female", "image" => "6-8.svg"],
            ["element_id" => 7, "gender" => "female", "image" => "7.svg"],
            ["element_id" => 8, "gender" => "female", "image" => "8.svg"],
            ["element_id" => 9, "gender" => "female", "image" => "9.svg"],
            ["element_id" => 15, "gender" => "female", "image" => "15.svg"],
            ["element_id" => 16, "gender" => "female", "image" => "16.svg"],
            ["element_id" => 17, "gender" => "female", "image" => "17.svg"],
            ["element_id" => 18, "gender" => "female", "image" => "18.svg"],
            ["element_id" => 19, "gender" => "female", "image" => "19.svg"],
            ["element_id" => 20, "gender" => "female", "image" => "20.svg"],
            ["element_id" => 23, "gender" => "female", "image" => "23.svg"],
            ["element_id" => 25, "gender" => "female", "image" => "25.svg"],
            ["element_id" => 26, "gender" => "female", "image" => "26.svg"],
            ["element_id" => 27, "gender" => "female", "image" => "27.svg"],
            ["element_id" => 28, "gender" => "female", "image" => "28.svg"],
            ["element_id" => 29, "gender" => "female", "image" => "29.svg"],
            ["element_id" => 31, "gender" => "female", "image" => "31.svg"],
            ["element_id" => 32, "gender" => "female", "image" => "32.svg"],
            ["element_id" => 33, "gender" => "female", "image" => "33.svg"],
            ["element_id" => 34, "gender" => "female", "image" => "34.svg"],
            ["element_id" => 35, "gender" => "female", "image" => "35.svg"],
            ["element_id" => 36, "gender" => "female", "image" => "36.svg"],
            ["element_id" => 37, "gender" => "female", "image" => "37.svg"],
            ["element_id" => 38, "gender" => "female", "image" => "38.svg"],
            ["element_id" => 39, "gender" => "female", "image" => "39.svg"],
        ];

        foreach($hairs as $hair){
            Hair::create($hair);
        }

        // Hats
        $hats = [
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
        ];

        foreach($hats as $item){
            Hat::create($item);
        }

        // Lips
        $lips = [
            ["element_id" => 0, "gender" => "male", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],


            ["element_id" => 0, "gender" => "female", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 3, "gender" => "female", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "female", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "female", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "female", "image" => "6.svg"],
            ["element_id" => 8, "gender" => "female", "image" => "8.svg"],
            ["element_id" => 9, "gender" => "female", "image" => "9.svg"],
            ["element_id" => 10, "gender" => "female", "image" => "10.svg"],
            ["element_id" => 13, "gender" => "female", "image" => "13.svg"],
            ["element_id" => 15, "gender" => "female", "image" => "15.svg"],
        ];

        foreach($lips as $item){
            Lip::create($item);
        }

         // noses
         $noses = [
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],

            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
        ];

        foreach($noses as $item){
            Nose::create($item);
        }

        // shoes
        $shoes = [
            ["element_id" => 0, "gender" => "male", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "male", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "male", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "male", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "male", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "male", "image" => "5.svg"],

            ["element_id" => 0, "gender" => "female", "image" => "0.svg"],
            ["element_id" => 1, "gender" => "female", "image" => "1.svg"],
            ["element_id" => 2, "gender" => "female", "image" => "2.svg"],
            ["element_id" => 3, "gender" => "female", "image" => "3.svg"],
            ["element_id" => 4, "gender" => "female", "image" => "4.svg"],
            ["element_id" => 5, "gender" => "female", "image" => "5.svg"],
            ["element_id" => 6, "gender" => "female", "image" => "6.svg"],
        ];

        foreach($shoes as $item){
            Shoe::create($item);
        }
    }
}
