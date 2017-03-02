<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty Table to empty the records if already exist.
        //DB::table('roles')->delete();
        DB::table('roles')->truncate();

        //Array to Seed in to the Database
        $roles = [
            [
                'name'=> 'admin',
                'label'=> 'Super Admin',
                'description' => 'This Role will have Access to almost all the Modules of the Application.'
            ],
            [
                'name'=> 'doctor',
                'label'=> 'Doctor',
                'description' => 'This role will have access to the doctors modules'
            ],
            [
                'name'=> 'patient',
                'label'=> 'Patient',
                'description' => 'This role will have access to the patients modules'
            ],
            [
                'name'=> 'guardian',
                'label'=> 'Guardian',
                'description' => 'This role will have access to the guardian modules'
            ]
        ];

        //Super Admin User
        DB::table('roles')->insert($roles);
    }
}
