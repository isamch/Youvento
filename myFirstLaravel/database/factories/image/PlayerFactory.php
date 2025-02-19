<?php

namespace Database\Factories\image;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\image\Player;

class PlayerFactory extends Factory
{

    protected $model = Player::class;
    /**
     * Define the model's default state.
     *
     *
     * @return array
     */


    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 40),
        ];
    }
}
