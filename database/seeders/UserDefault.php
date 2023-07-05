<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserDefault extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'rudyajuchansec32@gmail.com';
        $user->password = 'admin123';
        $user->save();
    }
}
