<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'   => 'Some more Laravel & some more Coffee please.',
        'content' => 'For purely organizational purposes we’ll manage the model-specific tests inside a directory named
        Models found in the tests/Unit directory. Create a new test class named EventTest using the
        following command'
    ];
});
