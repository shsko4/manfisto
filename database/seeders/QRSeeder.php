<?php

namespace Database\Seeders;

use App\Models\QR;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penalty1 = QR::create([
            'qr' => '',
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
    }
}
