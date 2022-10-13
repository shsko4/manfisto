<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManfistoListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manfisto_lists')->delete();
        
        \DB::table('manfisto_lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'track_id' => 1,
                'load_id' => 2,
                'nolon' => '70000.00',
                'vat' => '11900.00',
                'bpt' => '3500.00',
                'bpt_agent' => '700.00',
                'total' => '16100.00',
                'year' => '2022',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-13 08:56:00',
                'updated_at' => '2022-10-13 08:56:00',
            ),
            1 => 
            array (
                'id' => 2,
                'track_id' => 1,
                'load_id' => 1,
                'nolon' => '40000.00',
                'vat' => '6800.00',
                'bpt' => '2000.00',
                'bpt_agent' => '400.00',
                'total' => '9200.00',
                'year' => '2022',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-13 08:56:16',
                'updated_at' => '2022-10-13 08:56:16',
            ),
            2 => 
            array (
                'id' => 3,
                'track_id' => 2,
                'load_id' => 3,
                'nolon' => '150000.00',
                'vat' => '25500.00',
                'bpt' => '7500.00',
                'bpt_agent' => '1500.00',
                'total' => '34500.00',
                'year' => '2022',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-13 08:56:29',
                'updated_at' => '2022-10-13 08:56:29',
            ),
        ));
        
        
    }
}