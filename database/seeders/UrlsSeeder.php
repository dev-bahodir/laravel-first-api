<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrlsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('urls')->insert([
            [
                'raw' => 'https://images.unsplash.com/photo-1682685796186-1bb4a5655653?ixid=M3w1Mjk5OTh8MXwxfGFsbHwxfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1682685796186-1bb4a5655653?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MXwxfGFsbHwxfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1682685796186-1bb4a5655653?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MXwxfGFsbHwxfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1682685796186-1bb4a5655653?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MXwxfGFsbHwxfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 1
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1673201712131-64e971d8a7dc?ixid=M3w1Mjk5OTh8MHwxfGFsbHwyfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1673201712131-64e971d8a7dc?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwyfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1673201712131-64e971d8a7dc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwyfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1673201712131-64e971d8a7dc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwyfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 2
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1685097879207-1a897190300f?ixid=M3w1Mjk5OTh8MHwxfGFsbHwzfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1685097879207-1a897190300f?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwzfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1685097879207-1a897190300f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwzfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1685097879207-1a897190300f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwzfHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 3
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1686102575485-a2b541a74f31?ixid=M3w1Mjk5OTh8MHwxfGFsbHw0fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1686102575485-a2b541a74f31?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw0fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1686102575485-a2b541a74f31?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw0fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1686102575485-a2b541a74f31?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw0fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 4
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1700068877703-8ab9b45f64b2?ixid=M3w1Mjk5OTh8MHwxfGFsbHw1fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1700068877703-8ab9b45f64b2?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw1fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1700068877703-8ab9b45f64b2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw1fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1700068877703-8ab9b45f64b2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw1fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 5
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1682695795931-a546abdb6733?ixid=M3w1Mjk5OTh8MXwxfGFsbHw2fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1682695795931-a546abdb6733?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MXwxfGFsbHw2fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1682695795931-a546abdb6733?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MXwxfGFsbHw2fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1682695795931-a546abdb6733?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MXwxfGFsbHw2fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 6
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1700049775359-6f53cd16114e?ixid=M3w1Mjk5OTh8MHwxfGFsbHw3fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1700049775359-6f53cd16114e?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw3fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1700049775359-6f53cd16114e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw3fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1700049775359-6f53cd16114e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw3fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 7
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1699915746961-f08fc9b66d00?ixid=M3w1Mjk5OTh8MHwxfGFsbHw4fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1699915746961-f08fc9b66d00?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw4fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1699915746961-f08fc9b66d00?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw4fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1699915746961-f08fc9b66d00?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw4fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 8
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1699720885574-4e83b4ff3b11?ixid=M3w1Mjk5OTh8MHwxfGFsbHw5fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1699720885574-4e83b4ff3b11?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw5fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1699720885574-4e83b4ff3b11?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw5fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1699720885574-4e83b4ff3b11?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHw5fHx8fHx8Mnx8MTcwMDM3NTA3OXw&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 9
            ],
            [
                'raw' => 'https://images.unsplash.com/photo-1700191091674-9e1f434d06a8?ixid=M3w1Mjk5OTh8MHwxfGFsbHwxMHx8fHx8fDJ8fDE3MDAzNzUwNzl8&ixlib=rb-4.0.3',
                'full' => 'https://images.unsplash.com/photo-1700191091674-9e1f434d06a8?crop=entropy&cs=srgb&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwxMHx8fHx8fDJ8fDE3MDAzNzUwNzl8&ixlib=rb-4.0.3&q=85',
                'regular' => 'https://images.unsplash.com/photo-1700191091674-9e1f434d06a8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwxMHx8fHx8fDJ8fDE3MDAzNzUwNzl8&ixlib=rb-4.0.3&q=80&w=1080',
                'small' => 'https://images.unsplash.com/photo-1700191091674-9e1f434d06a8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1Mjk5OTh8MHwxfGFsbHwxMHx8fHx8fDJ8fDE3MDAzNzUwNzl8&ixlib=rb-4.0.3&q=80&w=400',
                'splash_id' => 10
            ]
        ]);
    }
}
