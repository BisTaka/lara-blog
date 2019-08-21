<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Bismantaka Aldila';
        $user->email = 'bismantaka20@hotmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach(Role::where('name', 'admin')->first());

        $user = new User();
        $user->name = 'Bismantaka Aldila';
        $user->email = 'bismantaka20@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
}
