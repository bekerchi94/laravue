<?php

namespace Database\Factories;

use \App\Models\tovar;
use Illuminate\Database\Eloquent\Factories\Factory;



class tovarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tovar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

   public function definition()
    {
 //       $faker = \Faker\Factory::create();
        return [
            'name'=>$this->faker->name(),
            'opisa'=>$this->faker->unique()->safeEmail,
            'sena'=>$this->faker->word(),
            'idkat'=> 1,
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime(),
        ];
    }
}
