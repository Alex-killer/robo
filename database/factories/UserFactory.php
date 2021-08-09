<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale(),
            'last_name' => $this->faker->lastName('male'),
            'middle_name' => $this->faker->middleNameMale(),
            'date_of_birth' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
            'created_at' => $this->faker->dateTimeBetween('-10 years', '-1 years'),
        ];
    }

    public function trial()
    {
        return $this->state(function (array $atributes) {
            return [
                'created_at' => $this->faker->dateTimeBetween('-90 days'),
            ];
        });
    }
}
