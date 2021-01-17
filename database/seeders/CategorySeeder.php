<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'GREY MARBLE'
        ]);
        DB::table('categories')->insert([
            'name' => 'WHITE MARBLE'
        ]);
        DB::table('categories')->insert([
            'name' => 'WALL MARBLE'
        ]);
        DB::table('categories')->insert([
            'name' => 'NITCO MARBLE'
        ]);
    }
}
