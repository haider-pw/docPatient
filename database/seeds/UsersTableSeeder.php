<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty Table to empty the records if already exist.
//        DB::table('users')->truncate();
        DB::table('users')->delete();


        //Super Admin User
        DB::table('users')->insert([
            'role_id' => 1,
            'gender_id' => 1,
            'cnic'=>'17301-1234567-1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'gender_id' => 1,
            'cnic'=>'17301-1234567-2',
            'name' => 'ahsan',
            'email' => 'ahsandev.creative@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
