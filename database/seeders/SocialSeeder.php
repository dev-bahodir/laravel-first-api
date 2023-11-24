<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social')->insert([
            [
                'instagram_username' => 'discoverneom',
                'portfolio_url' => 'http://www.neom.com',
                'twitter_username' => 'neom',
                'paypal_email' => 'null',
                'sponsor_id' => 1
            ],
            [
                'instagram_username' => 'by_stefaniejockschat',
                'portfolio_url' => 'https://www.storylines-video.de',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 2
            ],
            [
                'instagram_username' => 'null',
                'portfolio_url' => 'null',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 3
            ],
            [
                'instagram_username' => 'yichen980512',
                'portfolio_url' => 'null',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 4
            ],
            [
                'instagram_username' => 'sdbusch77',
                'portfolio_url' => 'null',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 5
            ],
            [
                'instagram_username' => 'discoverneom',
                'portfolio_url' => 'http://www.neom.com',
                'twitter_username' => 'neom',
                'paypal_email' => 'null',
                'sponsor_id' => 6
            ],
            [
                'instagram_username' => 'omilaev',
                'portfolio_url' => 'https://linktr.ee/omilaev',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 7
            ],
            [
                'instagram_username' => 'winstontjia_ls',
                'portfolio_url' => 'null',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 8
            ],
            [
                'instagram_username' => 'adimag99',
                'portfolio_url' => 'null',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 9
            ],
            [
                'instagram_username' => 'eugenegolovesov',
                'portfolio_url' => 'https://vsco.co/evgeneygolovesov',
                'twitter_username' => 'null',
                'paypal_email' => 'null',
                'sponsor_id' => 10
            ]
        ]);
    }
}
