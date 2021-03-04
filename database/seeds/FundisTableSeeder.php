<?php

use Illuminate\Database\Seeder;

class FundisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\Fundi::class)->create();
      
    }
}
