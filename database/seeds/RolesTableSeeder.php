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
        DB::table('roles')->truncate();
        //Super Admin User
        DB::table('roles')->insert([
            'role' => 'Super Admin',
            'description' => 'This Role Belongs to the Super Admin'
        ]);
    }
}
