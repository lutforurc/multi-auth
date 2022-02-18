<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use App\Models\Staff; 
use App\Models\User; 

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::create([
            'name'     => 'Staff',
            'email'    => 'staff@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name'     => 'User',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}