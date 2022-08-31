<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $office1 = Office::create([
            'name' => 'نافذة امدرمان',
        ]);
        $office2 = Office::create([
            'name' => 'نافذة بحري',
        ]);
        $office3 = Office::create([
            'name' => 'نافذة الخرطوم',
        ]);
    }
}
