<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SplashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('splash')->insert([
            [
                'slug' => 'a-man-climbing-up-the-side-of-a-mountain-85ey1vFIwkc',
                'width' => 5838,
                'height' => 3892,
                'color' => '#260c0c',
                'alt_description' => 'a man climbing up the side of a mountain'
            ],
            [
                'slug' => 'a-blurry-photo-of-a-clock-tower-in-the-distance-SFP-eOweXHE',
                'width' => 3648,
                'height' => 5472,
                'color' => '#8ca6d9',
                'alt_description' => 'a blurry photo of a clock tower in the distance'
            ],
            [
                'slug' => 'a-taxi-cab-driving-down-a-city-street-at-night-2ijGsqwQmPk',
                'width' => 5965,
                'height' => 3355,
                'color' => '#262626',
                'alt_description' => 'a taxi cab driving down a city street at night'
            ],
            [
                'slug' => 'a-man-standing-in-a-doorway-with-his-hands-on-his-chest-BCWai9TQdUw',
                'width' => 2496,
                'height' => 3744,
                'color' => '#d9d9d9',
                'alt_description' => 'a man standing in a doorway with his hands on his chest'
            ],
            [
                'slug' => 'a-large-cluster-of-stars-in-the-sky-zzvG8xZoUS8',
                'width' => 5593,
                'height' => 3811,
                'color' => '#262659',
                'alt_description' => 'a large cluster of stars in the sky'
            ],
            [
                'slug' => 'a-woman-in-an-orange-dress-walking-through-a-canyon-xAPIN3qwZN0',
                'width' => 9504,
                'height' => 6336,
                'color' => '#c08c73',
                'alt_description' => 'a woman in an orange dress walking through a canyon'
            ],
            [
                'slug' => 'a-room-filled-with-lots-of-desks-covered-in-monitors-5ma_XqDCiG4',
                'width' => 3840,
                'height' => 3000,
                'color' => '#262640',
                'alt_description' => 'a room filled with lots of desks covered in monitors'
            ],
            [
                'slug' => 'a-person-riding-an-escalator-in-a-subway-station-AKxoH1h1aKk',
                'width' => 4003,
                'height' => 6005,
                'color' => '#262626',
                'alt_description' => 'a person riding an escalator in a subway station'
            ],
            [
                'slug' => 'a-star-cluster-in-the-middle-of-the-night-sky-OcCmoDlcHjs',
                'width' => 4743,
                'height' => 3146,
                'color' => '#404040',
                'alt_description' => 'a star cluster in the middle of the night sky'
            ],
            [
                'slug' => 'a-black-and-white-photo-of-trees-in-the-snow-dExww47ZO7g',
                'width' => 2377,
                'height' => 3940,
                'color' => '#d9d9d9',
                'alt_description' => 'a black and white photo of trees in the snow'
            ]
        ]);
    }
}
