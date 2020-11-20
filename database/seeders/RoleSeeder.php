<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrador Principal'])->save();

        Role::create(['name' => 'Administrador'])->save();

        Role::create(['name' => 'Cliente'])->save();
    }
}
