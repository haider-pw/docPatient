<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenderTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(VaccinesTableSeeder::class);
        $this->call(DiseasesTableSeeder::class);

    }
}
