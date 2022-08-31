<?php

namespace Database\Seeders;

use App\Models\Manfisto;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManfistoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manfisto = Manfisto::create([
            'man_no' => 111,
            'transporter_id' => 1,
            'car_no' => '533 خ',
            'city_id' => 30,
            'dest' => 'امدرمان',
            'size' => '25 طن',
            'nolon' => 30000,
            'vat' => 5100,
            'bpt' => 300,
            'bpt2' => 300,
            'status' => 1,
            'recipt_no' => null,
            'acc_user_id' => 1,
            'user_id'=> 1,
            'office_id'=> 1,
        ]);

        $manfisto = Manfisto::create([
            'man_no' => 222,
            'transporter_id' => 2,
            'car_no' => '533 خ',
            'city_id' => 60,
            'dest' => 'بحري',
            'size' => '25 طن',
            'nolon' => 30000,
            'vat' => 5100,
            'bpt' => 300,
            'bpt2' => 300,
            'status' => 1,
            'recipt_no' => null,
            'acc_user_id' => 1,
            'user_id'=> 2,
            'office_id'=> 2,
        ]);

        $manfisto = Manfisto::create([
            'man_no' => 333,
            'transporter_id' => 3,
            'car_no' => '533 خ',
            'city_id' => 66,
            'dest' => 'الخرطوم',
            'size' => '25 طن',
            'nolon' => 30000,
            'vat' => 5100,
            'bpt' => 300,
            'bpt2' => 300,
            'status' => 1,
            'recipt_no' => null,
            'acc_user_id' => 1,
            'user_id'=> 3,
            'office_id'=> 3,
        ]);
    }
}
