<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    $genderMale = App\Gender::first()->id;
    $roleAdmin = App\Role::first()->id;
    return [
        'role_id' => rand($roleAdmin, ($roleAdmin+3)),
        'gender_id'=>rand($genderMale,($genderMale+1)),
        'cnic'=>$faker->unique()->regexify('/\d{5}-\d{7}-\d/'),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


//For Doctor
$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
    $user = factory(App\User::class)->create();
    $genderMale = App\Gender::first()->id;
    $user->assignRole('doctor');
    return [
        'user_id' => $user->id,
        'avatar' => ($user->gender_id === $genderMale)?'default_mDoctor.jpg':'default_fDoctor.jpg',
        'active' => 1,
        'speciality_id' => rand(1,5),
        'pmdc_id'=> str_random(8)
    ];
});

//For Patients
$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    $user = factory(App\User::class)->create();
    $genderMale = App\Gender::first()->id;
    $user->assignRole('patient');
    return [
        'user_id' => $user->id,
        'avatar' => ($user->gender_id === $genderMale)?'default_mPatient.jpg':'default_fPatient.jpg'
    ];
});