<?php

namespace Database\Factories;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entity::class;

    public $entities = ['Argentina', 'Colombia', 'Paraguay', 'Ecuador', 'El Salvador', 'Estados Unidos', 'Honduras', 'Mexico', 'Panamá'];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => shuffle($this->entities)
        ];
    }
}
