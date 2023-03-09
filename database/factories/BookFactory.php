<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id'=>random_int(1,10),
            'title'=>$this->faker->colorName,
            'ISBN'=>$this->faker->postcode,
            'pub_year'=>$this->faker->date,
            'available'=>random_int(1,100)
        ];
    }
}
