<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'student']);
        $role = Role::create(['name' => 'teacher']);
    }
}
