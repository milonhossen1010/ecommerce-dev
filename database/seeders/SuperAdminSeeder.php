<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Milon Hossen',
            'email'     =>  'milonhossen1010@gmail.com',
            'role'      =>  'administrator',
            'password'  =>  password_hash('Milonpc12##', PASSWORD_DEFAULT)
        ]);

        Setting::create([
            'logo'             =>  'logo.png',
            'site_identify'    =>  'Milonpc',
            'crt'              =>  'Copyright 2020©',
        ]);

      


      
    }
}
