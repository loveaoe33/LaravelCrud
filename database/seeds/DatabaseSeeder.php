<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0;$i<10; $i++)
        {
        DB::table('articles')->insert([
            'title' => str_random(10),
            'content' => str_random(255),
        
        ]);
        };
    }
}
