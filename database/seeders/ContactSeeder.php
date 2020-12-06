<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'email' => 'nirav1549@gmail.com',
            'address1' => 'Om marble, bypass road, Sardar Nagar, Palitana-364270, Bhavanagr, Gujarat.',
            'address2' => 'Om marble, bypass road, Sardar Nagar, Palitana-364270, Bhavanagr, Gujarat.',
            'phoneNumber' => '+91 9429829884',
        ]);
    }
}
