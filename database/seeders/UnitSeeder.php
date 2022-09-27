<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit = Unit::create([
            'name' => 'طن',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'جوال',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'قطعة',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'كرتونة',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'برميل',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'جالون',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'فنطاس',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'لوح',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'كيس',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'جردل',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'لفه',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'طرد',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'جركانه',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'صندوق',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'ثلاجة',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'قنطار',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'عربه',
            'user_id' => 1,
            'office_id' => 1,
        ]);
        $unit = Unit::create([
            'name' => 'حزمة',
            'user_id' => 1,
            'office_id' => 1,
        ]);
    }
}
