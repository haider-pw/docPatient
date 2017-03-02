<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remove Existing Records if Any.
        //DB::table('vaccines')->delete();
        DB::table('vaccines')->truncate();



        //Array to Populate in Table
        $vaccines = [
            ['name' => 'BCG','created_at'=>Carbon::now()],
            ['name' => 'Hepatitis B','created_at'=>Carbon::now()],
            ['name' => 'Polio','created_at'=>Carbon::now()],
            ['name' => 'Phneumococal','created_at'=>Carbon::now()],
            ['name' => 'Rota Virus','created_at'=>Carbon::now()],
            ['name' => 'Measles/MMR','created_at'=>Carbon::now()],
            ['name' => 'Influenza','created_at'=>Carbon::now()],
            ['name' => 'Varicella','created_at'=>Carbon::now()],
            ['name' => 'Booster','created_at'=>Carbon::now()],
            ['name' => 'Meningococcal','created_at'=>Carbon::now()],
            ['name' => 'Typhoid','created_at'=>Carbon::now()]
        ];

        //Finally Populate the Table using Insert Query.
        DB::table('gender')->insert($vaccines);
    }
}
