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

        //DB::table('users')->delete();
        DB::table('users')->truncate();
        DB::table('user_has_roles')->truncate();


        //Super Admin User
        $user1 = DB::table('users')->insertGetId([
            'role_id' => 1,
            'gender_id' => 1,
            'cnic'=>'17301-1234567-1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        
        $user1Obj = App\User::where('id',$user1)->first();

        $user1Obj->assignRole('admin');

        $user2 = DB::table('users')->insertGetId([
            'role_id' => 1,
            'gender_id' => 1,
            'cnic'=>'17301-1234567-2',
            'name' => 'ahsan',
            'email' => 'ahsandev.creative@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        $user2Obj = App\User::where('id',$user2)->first();

        $user2Obj->assignRole('admin');


    }
}
