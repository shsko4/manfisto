<?php

namespace Database\Seeders;

use App\Models\Penalty;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenaltySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penalty1 = Penalty::create([
            'penalty_owner_id' => 1,
            'penalty_type_id' => 1,
            'location' => 'السوق الشعبي امدرمان',
            'vat' => 170,
            'penalty_amount' => 20,
            'stamp' => 10,
            'total' => 200,
            'note' => 'عربة كارو',
            'user_id' => 1,
            'office_id' => 1,
        ]);

        $penalty2 = Penalty::create([
            'penalty_owner_id' => 2,
            'penalty_type_id' => 2,
            'location' => 'سوق ليبيا',
            'vat' => 2000,
            'penalty_amount' => 7000,
            'stamp' => 1000,
            'total' => 10000,
            'note' => 'حاول الهرب',
            'user_id' => 1,
            'office_id' => 1,
        ]);
    }
}
