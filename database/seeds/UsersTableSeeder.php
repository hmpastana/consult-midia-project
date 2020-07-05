<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
         $data1 = User::create([
             'name' => 'Hellen Pastana',
             'email' => 'hellen@hellenpastana.com',
             'password' => Hash::make('12345678'),
             'website' => 'www.hellenpastana.com',
             'location' => 'Mississauga,ON',
             'birthday' => '1989-12-22'
         ]);
     }
}
