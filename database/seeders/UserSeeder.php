<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Example Admin',
            'email'=>'example@admin.com',
            'password'=>Hash::make('example@admin.com'),
            'type'=>'admin',
        ]);
        User::create([
            'name'=>'Example User',
            'email'=>'example@user.com',
            'password'=>Hash::make('example@user.com'),
            'type'=>'user',
        ]);
    }
}
