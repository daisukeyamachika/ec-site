<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'sample01.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample02.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample03.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample04.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample05.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample06.jpg',
                'title' => null,
            ],
        ]);
    }
}
