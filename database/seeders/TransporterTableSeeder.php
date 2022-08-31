<?php

namespace Database\Seeders;

use App\Models\Transporter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransporterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transporter = Transporter::create([
            'tin' => '110000000011',
            'name' => 'حسين خالد الحاج',
            'email' => 'shsko4@gmail.com',
            'phone' => '0910786474',
            ]);
        $transporter2 = Transporter::create([
            'tin' => '110000000087',
            'name' => 'السلام',
            'email' => 'shsko4@gmail.com',
            'phone' => '0910786474',
            ]);
        $transporter3 = Transporter::create([
            'tin' => '300000000002',
            'name' => 'أولاد نميجة',
            'email' => 'shsko4@gmail.com',
            'phone' => '0910786474',
            ]);
    }
}
