<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HousingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the data to be inserted
        $housingData = [
            [
                'name' => 'Grand Srimahi Residence 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more data here if needed
        ];

        // Insert data into the housing table
        DB::table('housing')->insert($housingData);
    }
}
