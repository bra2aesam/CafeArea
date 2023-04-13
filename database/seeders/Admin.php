<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        User::create ([
        
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '0777888999',
            'password' => bcrypt('1234'),
            'is_admin' => 1
    
            
            ]);;
    }
}
