<?php

namespace Database\Seeders;

use App\Models\Custom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cutom1 = Custom::create([
            'driver_name' => 'احمد عبد السلام',
            'car_no' => '123 خ',
            'date_of_trip' => Carbon::now(),
            'user_id' => '1',
            'office_id' => '184',
        ]);
        $cutom2 = Custom::create([
            'driver_name' => 'حسن عمر جنقول',
            'car_no' => '447 خ',
            'date_of_trip' => Carbon::now(),
            'user_id' => '1',
            'office_id' => '184',
        ]);
        $cutom3 = Custom::create([
            'driver_name' => 'بخيت فضل المولى',
            'car_no' => '971 خ',
            'date_of_trip' => Carbon::now(),
            'user_id' => '1',
            'office_id' => '184',
        ]);
    }
}
