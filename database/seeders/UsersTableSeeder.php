<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'Super Admin User',
                'email' => 'superadmin@pandeyconnect.com',
                'password' => Hash::make('Nepal@123'),
                'status' => 'active',
                'email_verified_at' => Carbon::now(),
                'reference' => 'Nepal@123',
            ],
            [
                'username' => 'Admin User',
                'email' => 'admin@pandeyconnect.com',
                'password' => Hash::make('Nepal@123'),
                'status' => 'active',
                'email_verified_at' => Carbon::now(),
                'reference' => 'Nepal@123'
            ],

        ]);

        DB::table('role_user')->insert([
            ['role_id' => 1, 'user_id' => 1],
            ['role_id' => 2, 'user_id' => 2],
        ]);
    }
}
