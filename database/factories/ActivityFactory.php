<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->text(30);
        return [
            'title' => $name,
            'subtitle' => $this->faker->text(35),
            'lead' => $this->faker->text(542),
            'image' =>  $this->faker->imageUrl(),
            'slug' => Str::slug($name, '-'),
            'body' => $this->faker->text($maxNbChars = 100),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null),
            'state_id' => 1,
        ];
    }
}
