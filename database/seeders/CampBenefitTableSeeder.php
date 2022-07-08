<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp_benefits=[
            [
                'camp_id'=>1,
                'name'=>'Fullstack Laravel Dev'
            ],
            [
                'camp_id'=>1,
                'name'=>'Fullstack Javascript Dev'
            ],
            [
                'camp_id'=>1,
                'name'=>'Fullstack Laravel React'
            ],
            [
                'camp_id'=>1,
                'name'=>'Fullstack Laravel Vue'
            ],
            [
                'camp_id'=>2,
                'name'=>'Laravel For Beginner'
            ],
            [
                'camp_id'=>2,
                'name'=>'Javascript For Beginner'
            ],
        ];
        CampBenefit::insert($camp_benefits);
    }
}
