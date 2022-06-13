<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'name' => 'aslanasilon1',
            'email' => 'aslanasilon1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('aslanasilon1'),
            'level' => 'admin',
            'status' => 'active',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'aslanasilon2',
            'email' => 'aslanasilon2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('aslanasilon2'),
            'level' => 'user',
            'status' => 'active',
            'updated_at' => now(),
            'created_at' => now(),
        ]);

    }
}
