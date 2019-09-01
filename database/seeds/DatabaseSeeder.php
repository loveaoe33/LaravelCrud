<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*
        for ($i=0;$i<10; $i++)
        */
        {

        DB::table('admin')->insert([
            'name' =>'loveaoe33',
            'email'=>'loveaoe33@gmail.com',
            'password'=>Hash::make('love20720'),
            'remember_token'=>str_random(10),
        
        ]);
        };
   
    }
}
