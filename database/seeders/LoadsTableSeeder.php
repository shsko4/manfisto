<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loads')->delete();
        
        \DB::table('loads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '4-15 طن',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:31:08',
                'updated_at' => '2022-10-12 14:31:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '16-25 طن',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:31:21',
                'updated_at' => '2022-10-12 14:31:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'اكثر من 26 طن',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:31:34',
                'updated_at' => '2022-10-12 14:31:34',
            ),
        ));
        
        
    }
}