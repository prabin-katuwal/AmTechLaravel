<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => 'Jibika',
        	'contact_number' => '021-522153',
        	'contact_email' => 'amtechmed55@gmail.com',
        	'address' =>  'Katahari-4, Morang, Nepal'
        ]);
    }
}
