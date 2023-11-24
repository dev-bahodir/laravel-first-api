<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sponsorship')->insert([
            [
                'tagline' => 'Made to Change',
                'tagline_url' => 'https://www.neom.com/en-us?utm_source=unsplash&utm_medium=referral',
                'splash_id' => 1
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 2
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 3
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 4
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 5
            ],
            [
                'tagline' => 'Made to Change',
                'tagline_url' => 'https://www.neom.com/en-us?utm_source=unsplash&utm_medium=referral',
                'splash_id' => 6
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 7
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 8
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 9
            ],
            [
                'tagline' => 'null',
                'tagline_url' => 'null',
                'splash_id' => 10
            ]
        ]);
    }
}
