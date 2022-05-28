<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'first_name' => 'Jhee',
            'last_name' => 'Pharmacy',
            'email' => 'jheepasapii@gmail.com',
            'password' => Hash::make('secret'),
            'mobile_no' => '9860659858',
            'address' => 'Kirtipur'
        ]);
    }
}
