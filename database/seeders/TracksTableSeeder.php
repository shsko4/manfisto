<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tracks')->delete();
        
        \DB::table('tracks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'نيالا ->ابو جبيهة',
                'from_city_id' => 229,
                'to_city_id' => 142,
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:29:53',
                'updated_at' => '2022-10-12 14:29:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'نيالا ->الخرطوم بحرى',
                'from_city_id' => 229,
                'to_city_id' => 1,
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:30:03',
                'updated_at' => '2022-10-12 14:30:03',
            ),
        ));
        
        
    }
}