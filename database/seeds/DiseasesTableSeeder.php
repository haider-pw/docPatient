<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Remove Existing Records if Any.
        DB::table('diseases')->truncate();

        $diseases = [
            ['name' => 'fever', 'label'=>'Fever', 'created_at'=>Carbon::now()],
            ['name' => 'cancer', 'label'=>'Cancer', 'created_at'=>Carbon::now()],
            ['name' => 'lakva', 'label'=>'Lakva', 'created_at'=>Carbon::now()],
            ['name' => 'dental', 'label'=>'Dental', 'created_at'=>Carbon::now()]
        ];

        //Gender Table
        DB::table('diseases')->insert($diseases);
    }
}
