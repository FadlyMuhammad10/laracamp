<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps=[
            [
                'title'=>'Gila Belajar',
                'slug'=>'gila-belajar',
                'price'=>200,
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time()),
            ],
             [
                'title'=>'Beginner',
                'slug'=>'beginner-starter',
                'price'=>100,
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time()),
            ]
        ];

        //cara 1
        //foreach ($camps as $key => $camp) {
        //    Camp::create($camp);
        //}

        //cara 2
        Camp::insert($camps);
    }
}
