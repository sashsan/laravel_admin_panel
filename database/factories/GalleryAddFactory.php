<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Admin\Gallery;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {

    $data = [];

    for ($y = 1; $y <= 10; $y++) {
        for ($i = 1; $i <= 3; $i++) {
            $this->data = [
                'product_id' => $y,
                'img' => 'g'.$y.'-'.$i.'.png',
            ];
        }
    }

    return $data;
});


