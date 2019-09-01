<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Creat 
            ([

                'name' =>'loveaoe33',
                'email'=>'loveaoe33@gmail.com',
                'password'=>'love20720',
                'remember_token'=>str_random(10),
                ]);

        
    }
}
