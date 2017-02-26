<?php

use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialities')->delete();

        //Making an Array of Dummy Specialities for Now.
        $specialities = [
            [
                'name'=> 'Pediatrician',
                'description' => 'treats infants, toddlers, children and teenagers'
            ],
            [
                'name'=> 'Cardiologist',
                'description' => 'treats heart disease'
            ],
            [
                'name'=> 'Hematologist/Oncologist',
                'description' => 'treats diseases of the blood and blood-forming tissues (oncology including cancer and other tumors)'
            ],
            [
                'name'=> 'Neurologist',
                'description' => 'treats diseases and disorders of the nervous system.'
            ],
            [
                'name'=> 'Psychiatrist',
                'description' => 'treats patients with mental and emotional disorders.'
            ]
        ];

        //Super Admin User
        DB::table('specialities')->insert($specialities);
    }
}
