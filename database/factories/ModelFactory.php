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

$factory->define('App\API\V1\Models\User', function ($faker) {
    $gender = ['m','f'];
    $profilePicture = ['1','2','3','4','5','6','7','8','9','10'];
    return [
        'id' => $faker->uuid,
        // 'first_name' => $faker->firstName($gender = null|'male'|'female'),
        // 'last_name' => $faker->lastName,
        'name' => $faker->name,
        'email' => $faker->email,
        'username' => $faker->username,
        'password' => str_random(10),
        'phone' => $faker->phoneNumber,
        'sex' => 'm',
        'id_profile_picture' => $faker->randomElement($profilePicture),
        'birth_date' => $faker->dateTime($max = 'now'),
        'status' => '1',
        'rank' => '1'
    ];
});

$factory->define('App\API\V1\Models\Service', function($faker) {
    return [
        'service_name' => $faker->company,
        'id_service_owner' => $faker->unique()->numberBetween($min=0,$max=100),
        'description' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'service_picture' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->randomNumber(5),
        'site_link' => $faker->domainName,
        "id_service_category" => $faker->numberBetween($min=0,$max=10), 
        "id_service_status" => $faker->numberBetween($min=0,$max=10)
    ];
});

