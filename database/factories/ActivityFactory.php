<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'image' =>  $this->faker->imageUrl(),
            'slug' => $this->faker->text($maxNbChars = 100),
            'body' => $this->faker->text($maxNbChars = 100),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null),
            'state_id' => "1",
        ];
    }
}
