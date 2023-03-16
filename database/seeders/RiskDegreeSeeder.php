<?php

namespace Database\Seeders;

use App\Models\RiskDegree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiskDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degree1 = RiskDegree::create([
            'name' => 'عالي',
            'user_id' => '1',
            'office_id' => '1',
        ]);
        $degree2 = RiskDegree::create([
            'name' => 'متوسط',
            'user_id' => '1',
            'office_id' => '1',
        ]);
        $degree3 = RiskDegree::create([
            'name' => 'منخفض',
            'user_id' => '1',
            'office_id' => '1',
        ]);
    }
}
