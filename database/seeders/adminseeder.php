<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
           'username' => 'zakria',
           'email'=>'zakria@gmail.com',
           'password'=>'123456',
           'role'=>'admin'
        ]);
    }
}
