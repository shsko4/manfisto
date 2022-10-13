<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مواد بترولية',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:30:22',
                'updated_at' => '2022-10-12 14:30:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'توابل',
                'user_id' => 1,
                'office_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-10-12 14:30:32',
                'updated_at' => '2022-10-12 14:30:32',
            ),
        ));
        
        
    }
}