<?php

namespace Database\Factories;

use App\Models\Reactblog;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReactblogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reactblog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'body' => $this->faker->text(255),
            'author' => $this->faker->name,

        ];
    }
}
