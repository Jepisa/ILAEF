<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $imageUrl = $this->faker->imageUrl();
        return [
            'title' => $this->faker->name,
            'image' => $imageUrl, // 'image' => $this->faker->imageUrl($width = 640, $height = 480),
            // 'remember_token' => Str::random(10),
            'description' => $this->faker->text($maxNbChars = 100),
            'country_id' => 1,
            'url' => $imageUrl,
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null),
        ];
    }
}
