<?php

namespace Database\Seeders;

use App\Models\TypeOfId;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Type_of_id = TypeOfId::create([
            'name' => 'رقم وطني'
        ]);

        $Type_of_id1 = TypeOfId::create([
            'name' => 'جواز'
        ]);

        $Type_of_id2 = TypeOfId::create([
            'name' => 'رخصة قيادة'
        ]);

        $Type_of_id3 = TypeOfId::create([
            'name' => 'رقم تعريفي'
        ]);
    }
}
