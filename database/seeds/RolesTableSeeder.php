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
//        DB::table('roles')->truncate();
        DB::table('roles')->delete();

        //Array to Seed in to the Database
        $roles = [
            [
                'name'=> 'Super Admin',
                'description' => 'This Role will have Access to almost all the Modules of the Application.'
            ],
            [
                'name'=> 'Doctor',
                'description' => 'This role will have access to the doctors modules'
            ],
            [
                'name'=> 'Patient',
                'description' => 'This role will have access to the patients modules'
            ],
            [
                'name'=> 'Guardian',
                'description' => 'This role will have access to the guardian modules'
            ]
        ];

        //Super Admin User
        DB::table('roles')->insert($roles);
    }
}
