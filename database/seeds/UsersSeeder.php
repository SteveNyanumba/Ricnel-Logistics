<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->isAdmin = true;
        $admin->email = 'admin@ricnellogistics.com';
        $admin->password = Hash::make('password');
        $admin->save();
    }
}
