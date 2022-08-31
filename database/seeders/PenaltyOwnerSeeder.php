<?php

namespace Database\Seeders;

use App\Models\PenaltyOwner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenaltyOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penalty_owner1 = PenaltyOwner::create([
            'name' => 'عمر عبد الباقي حبيب',
            'type_of_id_id' => 1,
            'id_no' => '12045784561',
            'address' => 'الحتانة جنوب',
            'phone' => '0910786474',
            'office_id' => 1,
        ]);

        $penalty_owner2 = PenaltyOwner::create([
            'name' => 'صالح مختار سعد',
            'type_of_id_id' => 2,
            'id_no' => 'P025024177',
            'address' => 'المناقل',
            'phone' => '0911753691',
            'office_id' => 2,
        ]);


        $penalty_owner3 = PenaltyOwner::create([
            'name' => 'صهيب كرار علي احمد',
            'type_of_id_id' => 3,
            'id_no' => '1203214501',
            'address' => 'الكلاكلة اللفه',
            'phone' => '0910857987',
            'office_id' => 3,
        ]);

        $penalty_owner4 = PenaltyOwner::create([
            'name' => 'ود رملي للنقل',
            'type_of_id_id' => 4,
            'id_no' => '110000000087',
            'address' => 'السوق الشعبي',
            'phone' => '0118623410',
            'office_id' => 1,
        ]);
    }
}
