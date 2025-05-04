<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Super Admin',
            'email'=>'admin@yoa.com',
            'password'=>Hash::make('password'),
            'email_verified_at'=>Carbon::now(),
            'role'=>1
        ]);
    }
}
