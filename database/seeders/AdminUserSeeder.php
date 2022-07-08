<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'ADMIN',
            'email'=>'davit9747@gmail.com',
            'email_verified_at'=>date('Y-m-d h:i:s',time()),
            'password'=> \bcrypt('password'),
            'is_admin'=>true
         ]
        );
    }
}
