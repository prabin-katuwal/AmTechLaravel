<?php

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
     $user = App\User::create([
        	'name' => 'Amtech Med pvt. ltd',
        	'email' => '',
        	'password' => bcrypt(''),
            'admin' => 1
        ]);

          App\Profile::create([
             'user_id' =>  $user->id,
             'avatar' => 'uploads/avatars/1.png',
             'about' => '',
             'facebook' => '',
             'youtube' => '',
          ]);


    }
}
