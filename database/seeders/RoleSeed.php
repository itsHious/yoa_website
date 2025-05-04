<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::truncate();

        Roles::create([
            'name'=>'Super Admin',
        ]);

        Roles::create([
            'name'=>'Admin',
        ]);
    }
}
