<?php

namespace Database\Seeders;

use App\Models\PenaltyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenaltyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-----
        $penalty_type1 = PenaltyType::create([
            'name' => 'بدون فاتوره',
            'office_id' => 1,
        ]);

        $penalty_type1 = PenaltyType::create([
            'name' => 'فاقد ضريبي',
            'office_id' => 1,
        ]);

        $penalty_type1 = PenaltyType::create([
            'name' => 'بدون إستيفاء',
            'office_id' => 1,
        ]);

        //-----
        $penalty_type2 = PenaltyType::create([
            'name' => 'بدون فاتوره',
            'office_id' => 2,
        ]);

        $penalty_type2 = PenaltyType::create([
            'name' => 'فاقد ضريبي',
            'office_id' => 2,
        ]);

        $penalty_type2 = PenaltyType::create([
            'name' => 'بدون إستيفاء',
            'office_id' => 2,
        ]);

        //-----
        $penalty_type3 = PenaltyType::create([
            'name' => 'بدون فاتوره',
            'office_id' => 3,
        ]);

        $penalty_type3 = PenaltyType::create([
            'name' => 'فاقد ضريبي',
            'office_id' => 3,
        ]);

        $penalty_type3 = PenaltyType::create([
            'name' => 'بدون إستيفاء',
            'office_id' => 3,
        ]);
    }
}
