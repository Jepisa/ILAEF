<?php

namespace Database\Seeders;

use App\Models\Entity;
use Illuminate\Database\Seeder;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entity::create(['name' => 'Argentina'])->save();
        Entity::create(['name' => 'Ecuador'])->save();
        Entity::create(['name' => 'Colombia'])->save();
        Entity::create(['name' => 'Paraguay'])->save();
        Entity::create(['name' => 'Panamá'])->save();
        Entity::create(['name' => 'EEUU'])->save();
        Entity::create(['name' => 'Honduras'])->save();
        Entity::create(['name' => 'Mexico'])->save();
        Entity::create(['name' => 'El Salvador'])->save();
    }
}
