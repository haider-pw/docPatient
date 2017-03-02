<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remove Existing Records if Any.
       // DB::table('gender')->delete();
        DB::table('gender')->truncate();


        //Array to Populate in Table
        $genders = [
            ['gender' => 'Male','created_at'=>Carbon::now()],
            ['gender' => 'Female','created_at'=>Carbon::now()]
        ];

        //Gender Table
        DB::table('gender')->insert($genders);
    }
}
