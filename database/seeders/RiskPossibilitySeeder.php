<?php

namespace Database\Seeders;

use App\Models\RiskPossibility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiskPossibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poss1 = RiskPossibility::create([
            'name' => 'متكرر',
            'user_id' => '1',
            'office_id' => '1',
        ]);
        $poss2 = RiskPossibility::create([
            'name' => 'احيانا',
            'user_id' => '1',
            'office_id' => '1',
        ]);
        $poss3 = RiskPossibility::create([
            'name' => 'نادر',
            'user_id' => '1',
            'office_id' => '1',
        ]);
    }
}
