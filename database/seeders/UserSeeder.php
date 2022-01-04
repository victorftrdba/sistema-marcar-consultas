<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Desenvolvedor',
            'email' => 'dev@dev.com',
            'password' => Hash::make('dev102030'),
        ];

        User::create($data);
    }
}