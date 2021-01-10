<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            'name' => 'Palitan',
            'address' => 'Om marble',
            'phoneNumber' => '+91 9429829884',
            'email' => 'hitenbhayani41@gmail.com',
        ]);
    }
}

