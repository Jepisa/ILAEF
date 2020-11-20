<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Routing\Route;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => 'Natalia Christensen',
            'email' => 'natalia@iadef.org',
            'role_id' => Role::where('name', 'Administrador Principal')->select('id')->first(),
        ])->create();

        User::factory()
            ->times(5)
            ->create();

        User::factory([
            'role_id' => Role::where('name', 'Cliente')
                                ->select('id')
                                ->first()
        ])->create();
    }
}
