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
            [
                'name' => 'test4',
                'email' => 'test4@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test5',
                'email' => 'test5@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test6',
                'email' => 'test6@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test7',
                'email' => 'test7@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test8',
                'email' => 'test8@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test9',
                'email' => 'test9@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test10',
                'email' => 'test10@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test11',
                'email' => 'test11@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test12',
                'email' => 'test12@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test13',
                'email' => 'test13@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test14',
                'email' => 'test14@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
            [
                'name' => 'test15',
                'email' => 'test15@test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/05/02 21:08:56',
            ],
        ]);
    }
}
