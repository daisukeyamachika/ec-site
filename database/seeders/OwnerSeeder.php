<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test2',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test3',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
        ]);
    }
}
