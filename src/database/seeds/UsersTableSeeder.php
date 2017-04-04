<?php

namespace Ridrog\SimpleAdmin\Database\Seeds;

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.de',
            'password' => bcrypt('123456'),
            config('simpleadmin.condition') => true
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@user.de',
            'password' => bcrypt('123456'),
            config('simpleadmin.condition') => false
        ]);
    }
}
