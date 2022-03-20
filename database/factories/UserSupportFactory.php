<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\ExtensionUser;

class UserSupportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => ExtensionUser::all()->random()->id,
            'creator_id' => User::all()->random()->id,
            'supporting' => $this->faker->boolean()
        ];
    }
}
