<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the data to be inserted
        $unitData = [];

        // Define blocks of houses and their respective configurations
        $blocks = [
            ['block' => 'A1', 'total_units' => 28, 'additional_land' => [1, 28]],
            ['block' => 'A2', 'total_units' => 30, 'additional_land' => [1, 30, 16, 15]],
            ['block' => 'A3', 'total_units' => 14, 'additional_land' => [1, 14, 8, 8]],
            ['block' => 'A4', 'total_units' => 5, 'additional_land' => [1, 5]],
            ['block' => 'A5', 'total_units' => 28, 'additional_land' => [4, 31, 17, 18]],
            ['block' => 'B1', 'total_units' => 20, 'additional_land' => [1, 20]],
            ['block' => 'B2', 'total_units' => 34, 'additional_land' => [1, 34]],
            ['block' => 'B3', 'total_units' => 36, 'additional_land' => [1, 36, 18, 19]],
            ['block' => 'B4', 'total_units' => 36, 'additional_land' => [1, 36, 18, 19]],
            ['block' => 'B5', 'total_units' => 26, 'additional_land' => [12, 14]],
            ['block' => 'C2', 'total_units' => 15],
            ['block' => 'C3', 'total_units' => 34, 'additional_land' => [17, 18, 1, 34]],
            ['block' => 'C4', 'total_units' => 34, 'additional_land' => [17, 18, 1, 34]],
            ['block' => 'C5', 'total_units' => 34, 'additional_land' => [17, 18, 1, 34]],
        ];

        // Loop through each block
        foreach ($blocks as $blockData) {
            $block = $blockData['block'];
            $totalUnits = $blockData['total_units'];
            $additionalLand = $blockData['additional_land'] ?? [];

            for ($i = 1; $i <= $totalUnits; $i++) {
                if (!in_array($i, $additionalLand)) {
                    $unitNumber = $block . '-' . ($i < 13 ? $i : ($i == $totalUnits ? '12A' : $i + 1));
                    $unitData[] = [
                        'unit_number' => $unitNumber,
                        'status' => 1,
                        'additional_land' => in_array($i, [1, $totalUnits, 16, 15, 8, 5, 31, 17, 18, 12, 14, 20, 19, 34]),
                        'housing_id' => 1, // Assuming housing_id is 1 for all units
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
            }
        }

        // Insert data into the units table
        DB::table('unit')->insert($unitData);
    }
}
