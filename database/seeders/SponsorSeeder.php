<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sponsor')->insert([
            [
                'username' => 'neom',
                'name' => 'NEOM',
                'firstname' => 'NEOM',
                'lastname' => 'null',
                'bio' => 'Located in the northwest of Saudi Arabia, NEOM’s diverse climate offers both sun-soaked beaches and snow-capped mountains. NEOM’s unique location will provide residents with enhanced livability while protecting 95% of the natural landscape.',
                'location' => 'NEOM, Saudi Arabia',
                'accepted_tos' => true,
                'for_hire' => false,
                'sponsorship_id' => 1
            ],
            [
                'username' => 'stefaniejockschat',
                'name' => 'Stefanie Jockschat',
                'firstname' => 'Stefanie',
                'lastname' => 'Jockschat',
                'bio' => 'Passionate about photo- & videography. Your support fuels my creative journey, and I am profoundly grateful for every gesture.',
                'location' => 'Lueneburg, Germany',
                'accepted_tos' => true,
                'for_hire' => true,
                'sponsorship_id' => 2
            ],
            [
                'username' => 'jameshca',
                'name' => 'Chean Ang Heng',
                'firstname' => 'Chean Ang',
                'lastname' => 'Heng',
                'bio' => 'null',
                'location' => 'null',
                'accepted_tos' => true,
                'for_hire' => false,
                'sponsorship_id' => 3
            ],
            [
                'username' => 'ycbrphotography',
                'name' => 'Yichen Wang',
                'firstname' => 'Yichen',
                'lastname' => 'Wang',
                'bio' => 'dreams are free',
                'location' => 'Toronto',
                'accepted_tos' => true,
                'for_hire' => true,
                'sponsorship_id' => 4
            ],
            [
                'username' => 'sdbusch77',
                'name' => 'Steve Busch',
                'firstname' => 'Steve',
                'lastname' => 'Busch',
                'bio' => 'null',
                'location' => 'null',
                'accepted_tos' => true,
                'for_hire' => false,
                'sponsorship_id' => 5
            ],
            [
                'username' => 'neom',
                'name' => 'NEOM',
                'firstname' => 'NEOM',
                'lastname' => 'null',
                'bio' => 'Located in the northwest of Saudi Arabia, NEOM’s diverse climate offers both sun-soaked beaches and snow-capped mountains. NEOM’s unique location will provide residents with enhanced livability while protecting 95% of the natural landscape.',
                'location' => 'NEOM, Saudi Arabia',
                'accepted_tos' => true,
                'for_hire' => false,
                'sponsorship_id' => 6
            ],
            [
                'username' => 'omilaev',
                'name' => 'Igor Omilaev',
                'firstname' => 'Igor',
                'lastname' => 'Omilaev',
                'bio' => 'I help you to tell your stories with colorful images. Support on PayPal or GoFundMe — the link on LinkTree below. Even only 1$ counts. More images on paid stocks Adobe Stock, Shutterstock and Gettyimages. Cinema 4D, Redshift, Blender, Cycles.',
                'location' => 'Barcelona, Spain',
                'accepted_tos' => true,
                'for_hire' => true,
                'sponsorship_id' => 7
            ],
            [
                'username' => 'winstontjia',
                'name' => 'Winston Tjia',
                'firstname' => 'Winston',
                'lastname' => 'Tjia',
                'bio' => 'Hi there! My name is Winston and I  happy to share what I see',
                'location' => 'Penryn, United Kingdom',
                'accepted_tos' => true,
                'for_hire' => true,
                'sponsorship_id' => 8
            ],
            [
                'username' => 'l2space',
                'name' => 'Adrian Mag',
                'firstname' => 'Adrian',
                'lastname' => 'Mag',
                'bio' => 'null',
                'location' => 'null',
                'accepted_tos' => true,
                'for_hire' => false,
                'sponsorship_id' => 9
            ],
            [
                'username' => 'eugene_golovesov',
                'name' => 'Eugene Golovesov',
                'firstname' => 'Eugene',
                'lastname' => 'Golovesov',
                'bio' => 'Hello everyone! Welcome to my profile.  Here I share my photos.  You can see even more of my photos on my Instagram: @eugenegolovesov.   My Behance: @eugenegolovesov.  Thank you for your attention!',
                'location' => 'null',
                'accepted_tos' => true,
                'for_hire' => false,
                'sponsorship_id' => 10
            ]
        ]);
    }
}
