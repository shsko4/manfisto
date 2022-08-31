<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state_id' => 1,
                'locality_id' => 1,
                'name' => 'الخرطوم بحرى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'state_id' => 1,
                'locality_id' => 2,
                'name' => 'ام درمان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'state_id' => 1,
                'locality_id' => 3,
                'name' => 'كرري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'state_id' => 1,
                'locality_id' => 4,
                'name' => 'امبدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'state_id' => 1,
                'locality_id' => 5,
                'name' => 'شرق النيل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'state_id' => 1,
                'locality_id' => 6,
                'name' => 'الخرطوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'state_id' => 1,
                'locality_id' => 7,
                'name' => 'سوبا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'state_id' => 1,
                'locality_id' => 7,
                'name' => 'الكلاكلة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'state_id' => 2,
                'locality_id' => 8,
                'name' => 'حلايب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'state_id' => 2,
                'locality_id' => 9,
                'name' => 'بورتسودان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'state_id' => 2,
                'locality_id' => 10,
                'name' => 'سنكات',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'state_id' => 2,
                'locality_id' => 11,
                'name' => 'سواكن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'state_id' => 2,
                'locality_id' => 12,
                'name' => 'عقيق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'state_id' => 2,
                'locality_id' => 13,
                'name' => 'هيا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'state_id' => 2,
                'locality_id' => 14,
                'name' => 'درديب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'state_id' => 2,
                'locality_id' => 15,
                'name' => 'القنب والاوليب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'state_id' => 2,
                'locality_id' => 16,
                'name' => 'كلالايت',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'state_id' => 2,
                'locality_id' => 17,
                'name' => 'طوكر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'state_id' => 2,
                'locality_id' => 18,
                'name' => 'جبيت المعادن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'state_id' => 3,
                'locality_id' => 19,
                'name' => 'نهر عطبرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'state_id' => 3,
                'locality_id' => 20,
                'name' => 'كسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'state_id' => 3,
                'locality_id' => 21,
                'name' => 'همشكوريب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'state_id' => 3,
                'locality_id' => 22,
                'name' => 'ريفي كسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'state_id' => 3,
                'locality_id' => 23,
                'name' => 'اروما',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'state_id' => 3,
                'locality_id' => 24,
                'name' => 'حمداييت',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'state_id' => 3,
                'locality_id' => 24,
                'name' => 'ودالحليو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'state_id' => 3,
                'locality_id' => 25,
                'name' => 'تلكوك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'state_id' => 3,
                'locality_id' => 26,
                'name' => 'حلفا الجديدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'state_id' => 3,
                'locality_id' => 27,
                'name' => 'القربة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'state_id' => 3,
                'locality_id' => 28,
                'name' => 'غرب كسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'state_id' => 3,
                'locality_id' => 29,
                'name' => 'شمال الدلتا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'state_id' => 4,
                'locality_id' => 30,
                'name' => 'الفاو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'state_id' => 4,
                'locality_id' => 31,
                'name' => 'الشواك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'state_id' => 4,
                'locality_id' => 32,
                'name' => 'القضارف',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'state_id' => 11,
                'locality_id' => 93,
                'name' => 'الحواتة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'state_id' => 4,
                'locality_id' => 33,
                'name' => 'الحواتة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'state_id' => 11,
                'locality_id' => 93,
                'name' => 'الرهد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'state_id' => 4,
                'locality_id' => 33,
                'name' => 'الرهد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'state_id' => 11,
                'locality_id' => 93,
                'name' => 'بازورا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'state_id' => 4,
                'locality_id' => 33,
                'name' => 'بازورا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'state_id' => 4,
                'locality_id' => 34,
                'name' => 'ابو رخم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'state_id' => 4,
                'locality_id' => 34,
                'name' => 'المفاوة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'state_id' => 4,
                'locality_id' => 35,
                'name' => 'القلابات الغربية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'state_id' => 4,
                'locality_id' => 35,
                'name' => 'باندغيو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'state_id' => 4,
                'locality_id' => 35,
                'name' => 'ام الخير',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'state_id' => 4,
                'locality_id' => 35,
                'name' => 'الحوري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'state_id' => 4,
                'locality_id' => 36,
                'name' => 'قلع النحل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'state_id' => 4,
                'locality_id' => 37,
                'name' => 'الصباغ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'state_id' => 4,
                'locality_id' => 38,
                'name' => 'باسندا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'state_id' => 4,
                'locality_id' => 39,
                'name' => 'وسط القضارف',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'state_id' => 4,
                'locality_id' => 40,
                'name' => 'القلابات',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'state_id' => 4,
                'locality_id' => 41,
                'name' => 'القريشة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'state_id' => 5,
                'locality_id' => 42,
                'name' => 'عبري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'state_id' => 5,
                'locality_id' => 42,
                'name' => 'اشكيت',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'state_id' => 5,
                'locality_id' => 42,
                'name' => 'وادي حلفا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'state_id' => 5,
                'locality_id' => 43,
                'name' => 'السليم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'state_id' => 5,
                'locality_id' => 43,
                'name' => 'دنقلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'state_id' => 5,
                'locality_id' => 44,
                'name' => 'مروى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'state_id' => 5,
                'locality_id' => 45,
                'name' => 'ارقو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'state_id' => 5,
                'locality_id' => 45,
                'name' => 'كنار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'state_id' => 5,
                'locality_id' => 45,
                'name' => 'البرقيق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'state_id' => 5,
                'locality_id' => 45,
                'name' => 'كرمة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'state_id' => 5,
                'locality_id' => 46,
                'name' => 'الغدار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'state_id' => 5,
                'locality_id' => 46,
                'name' => 'القولد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'state_id' => 5,
                'locality_id' => 47,
                'name' => 'الملتقي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'state_id' => 5,
                'locality_id' => 47,
                'name' => 'الغابة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'state_id' => 5,
                'locality_id' => 47,
                'name' => 'الدبة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'state_id' => 5,
                'locality_id' => 48,
                'name' => 'الترعة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'state_id' => 5,
                'locality_id' => 48,
                'name' => 'دلقو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'state_id' => 5,
                'locality_id' => 49,
                'name' => 'كريمة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'state_id' => 6,
                'locality_id' => 50,
                'name' => 'ابوحمد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'state_id' => 6,
                'locality_id' => 51,
                'name' => 'بربر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'state_id' => 6,
                'locality_id' => 52,
                'name' => 'الدامر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'state_id' => 6,
                'locality_id' => 53,
                'name' => 'المتمه',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'state_id' => 6,
                'locality_id' => 54,
                'name' => 'البحيرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'state_id' => 6,
                'locality_id' => 55,
                'name' => 'عطبره',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'state_id' => 6,
                'locality_id' => 56,
                'name' => 'شندى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'state_id' => 7,
                'locality_id' => 57,
                'name' => 'الجديد الثورة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'state_id' => 7,
                'locality_id' => 57,
                'name' => 'الكاملين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'state_id' => 7,
                'locality_id' => 58,
                'name' => 'رفاعة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'state_id' => 7,
                'locality_id' => 58,
                'name' => 'تمبول',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'state_id' => 7,
                'locality_id' => 59,
                'name' => 'المناقل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'state_id' => 7,
                'locality_id' => 60,
                'name' => 'مدنى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'state_id' => 7,
                'locality_id' => 61,
                'name' => 'ام القري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'state_id' => 7,
                'locality_id' => 62,
                'name' => 'العزازي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'state_id' => 7,
                'locality_id' => 63,
                'name' => 'ابوقوتة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'state_id' => 7,
                'locality_id' => 63,
                'name' => 'طابت',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'state_id' => 7,
                'locality_id' => 63,
                'name' => 'الحصاحيصا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'state_id' => 7,
                'locality_id' => 64,
                'name' => 'الحاج عبدالله',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'state_id' => 7,
                'locality_id' => 64,
                'name' => 'المدينة عرب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'state_id' => 7,
                'locality_id' => 64,
                'name' => 'الحوش',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'state_id' => 8,
                'locality_id' => 65,
                'name' => 'القطينة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'state_id' => 8,
                'locality_id' => 66,
                'name' => 'كوستى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'state_id' => 8,
                'locality_id' => 67,
                'name' => 'الجبلين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'state_id' => 8,
                'locality_id' => 68,
                'name' => 'ام رمته',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'state_id' => 8,
                'locality_id' => 69,
                'name' => 'الدويم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'state_id' => 8,
                'locality_id' => 70,
                'name' => 'تندلتى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'state_id' => 8,
                'locality_id' => 71,
                'name' => 'ربك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'state_id' => 9,
                'locality_id' => 72,
                'name' => 'سنجة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'state_id' => 9,
                'locality_id' => 73,
                'name' => 'الدندر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'state_id' => 9,
                'locality_id' => 74,
                'name' => 'شرق سنار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'state_id' => 9,
                'locality_id' => 75,
                'name' => 'كركوج',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'state_id' => 9,
                'locality_id' => 75,
                'name' => 'السوكى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'state_id' => 9,
                'locality_id' => 76,
                'name' => 'ود النيل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'state_id' => 9,
                'locality_id' => 77,
                'name' => 'سنار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'state_id' => 9,
                'locality_id' => 78,
                'name' => 'المزموم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'state_id' => 10,
                'locality_id' => 79,
                'name' => 'النهود',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'state_id' => 10,
                'locality_id' => 80,
                'name' => 'السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'state_id' => 10,
                'locality_id' => 81,
                'name' => 'غبيش',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'state_id' => 10,
                'locality_id' => 82,
                'name' => 'ابيي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'state_id' => 10,
                'locality_id' => 82,
                'name' => 'الميرم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'state_id' => 10,
                'locality_id' => 82,
                'name' => 'المجلد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'state_id' => 10,
                'locality_id' => 83,
                'name' => 'بابنوسة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'state_id' => 10,
                'locality_id' => 84,
                'name' => 'المفرية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'state_id' => 10,
                'locality_id' => 84,
                'name' => 'الدودية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'state_id' => 10,
                'locality_id' => 84,
                'name' => 'الخوي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'state_id' => 10,
                'locality_id' => 85,
                'name' => 'الاضية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'state_id' => 10,
                'locality_id' => 86,
                'name' => 'كيلك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'state_id' => 10,
                'locality_id' => 86,
                'name' => 'ام عدارة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'state_id' => 10,
                'locality_id' => 87,
                'name' => 'ام رسوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'state_id' => 10,
                'locality_id' => 88,
                'name' => 'ابو زبد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'state_id' => 10,
                'locality_id' => 89,
                'name' => 'السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'state_id' => 11,
                'locality_id' => 90,
                'name' => 'جبرة الشيخ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'state_id' => 11,
                'locality_id' => 91,
                'name' => 'بارا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'state_id' => 11,
                'locality_id' => 92,
                'name' => 'ام روابه',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'state_id' => 11,
                'locality_id' => 93,
                'name' => 'الرهد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'state_id' => 4,
                'locality_id' => 33,
                'name' => 'الرهد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'state_id' => 11,
                'locality_id' => 94,
                'name' => 'سودرى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'state_id' => 11,
                'locality_id' => 95,
                'name' => 'ام دم حاج احمد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'state_id' => 11,
                'locality_id' => 96,
                'name' => 'الابيض',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'state_id' => 11,
                'locality_id' => 97,
                'name' => 'غرب بارا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'state_id' => 12,
                'locality_id' => 98,
                'name' => 'كادقلى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'state_id' => 12,
                'locality_id' => 99,
                'name' => 'تلودى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'state_id' => 12,
                'locality_id' => 100,
                'name' => 'رشاد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'state_id' => 12,
                'locality_id' => 101,
                'name' => 'الدلنج',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'state_id' => 12,
                'locality_id' => 102,
                'name' => 'الدبيبات',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'state_id' => 12,
                'locality_id' => 103,
                'name' => 'دلامي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'state_id' => 12,
                'locality_id' => 104,
                'name' => 'ام دورين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'state_id' => 12,
                'locality_id' => 105,
                'name' => 'هيبان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'state_id' => 12,
                'locality_id' => 106,
                'name' => 'العباسية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'state_id' => 12,
                'locality_id' => 107,
                'name' => 'ابو نوارة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'state_id' => 12,
                'locality_id' => 107,
                'name' => 'ابو جبيهة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'state_id' => 12,
                'locality_id' => 108,
                'name' => 'ابو كرشولا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'state_id' => 12,
                'locality_id' => 109,
                'name' => 'كلوقي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'state_id' => 12,
                'locality_id' => 110,
                'name' => 'طوطاح ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'state_id' => 12,
                'locality_id' => 111,
                'name' => 'الترتر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'state_id' => 17,
                'locality_id' => 168,
                'name' => 'السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'state_id' => 12,
                'locality_id' => 112,
                'name' => 'السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'state_id' => 12,
                'locality_id' => 113,
                'name' => 'كرتالا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'state_id' => 12,
                'locality_id' => 113,
                'name' => 'هبيلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'state_id' => 12,
                'locality_id' => 114,
                'name' => 'الشعير',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'state_id' => 12,
                'locality_id' => 114,
                'name' => 'برنو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'state_id' => 17,
                'locality_id' => 176,
                'name' => 'كتم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'state_id' => 13,
                'locality_id' => 115,
                'name' => 'كتم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'state_id' => 13,
                'locality_id' => 116,
                'name' => 'ام كداده',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'state_id' => 13,
                'locality_id' => 117,
                'name' => 'مليط',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'جابر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'عيال امين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'بطاطا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'ام ساعونة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'حسكنيتة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'اندراب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'ابو سفيان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'التوم بشارة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'دليل بابكر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'state_id' => 13,
                'locality_id' => 118,
                'name' => 'اللعيت',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'state_id' => 13,
                'locality_id' => 119,
                'name' => 'الطويشة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'state_id' => 13,
                'locality_id' => 120,
                'name' => 'الطينة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'state_id' => 13,
                'locality_id' => 121,
                'name' => 'ام برو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'state_id' => 13,
                'locality_id' => 122,
                'name' => 'ودعة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'state_id' => 13,
                'locality_id' => 123,
                'name' => 'الكومه',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'state_id' => 13,
                'locality_id' => 124,
                'name' => 'كورناي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'state_id' => 13,
                'locality_id' => 125,
                'name' => 'الواحة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'state_id' => 13,
                'locality_id' => 126,
                'name' => 'طويلة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'state_id' => 13,
                'locality_id' => 127,
                'name' => 'المالحة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'state_id' => 13,
                'locality_id' => 128,
                'name' => 'سرف عمره',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'state_id' => 13,
                'locality_id' => 129,
                'name' => 'الفاشر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'state_id' => 13,
                'locality_id' => 130,
                'name' => 'كبكابية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'state_id' => 13,
                'locality_id' => 131,
                'name' => 'السريف',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'state_id' => 13,
                'locality_id' => 132,
                'name' => 'دار السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'state_id' => 14,
                'locality_id' => 133,
                'name' => 'الضعين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'state_id' => 14,
                'locality_id' => 134,
                'name' => 'شعيرية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'state_id' => 14,
                'locality_id' => 135,
                'name' => 'ابو مطارق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'state_id' => 14,
                'locality_id' => 136,
                'name' => 'عسلاية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'state_id' => 14,
                'locality_id' => 137,
                'name' => 'الفردوس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'state_id' => 14,
                'locality_id' => 138,
                'name' => 'ياسين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'state_id' => 14,
                'locality_id' => 139,
                'name' => 'ابو جابرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'state_id' => 14,
                'locality_id' => 140,
                'name' => 'عديلة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'state_id' => 14,
                'locality_id' => 141,
                'name' => 'ابو كارنكا ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'state_id' => 15,
                'locality_id' => 142,
                'name' => 'كلبس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'state_id' => 15,
                'locality_id' => 143,
                'name' => 'هبيلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'state_id' => 15,
                'locality_id' => 144,
                'name' => 'سربا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'state_id' => 15,
                'locality_id' => 145,
                'name' => 'كرينك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'state_id' => 15,
                'locality_id' => 146,
                'name' => 'جبل مون',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'state_id' => 15,
                'locality_id' => 147,
                'name' => 'فور برنقا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'state_id' => 15,
                'locality_id' => 148,
                'name' => 'مورني',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'state_id' => 15,
                'locality_id' => 149,
                'name' => 'بيضة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'state_id' => 15,
                'locality_id' => 150,
                'name' => 'الجنينة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'state_id' => 16,
                'locality_id' => 151,
                'name' => 'نرتتي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'state_id' => 16,
                'locality_id' => 152,
                'name' => 'قارسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'state_id' => 16,
                'locality_id' => 153,
                'name' => 'زالنجي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'state_id' => 16,
                'locality_id' => 154,
                'name' => 'ام دخن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'state_id' => 16,
                'locality_id' => 155,
                'name' => 'مكجر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'state_id' => 16,
                'locality_id' => 156,
                'name' => 'أزوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'state_id' => 16,
                'locality_id' => 157,
                'name' => 'بندسي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'state_id' => 16,
                'locality_id' => 158,
                'name' => 'روكورو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'state_id' => 16,
                'locality_id' => 159,
                'name' => 'جبل مرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'state_id' => 16,
                'locality_id' => 160,
                'name' => 'وادي صالح',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'state_id' => 17,
                'locality_id' => 161,
                'name' => 'الردوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'state_id' => 17,
                'locality_id' => 162,
                'name' => 'نتيقا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'state_id' => 17,
                'locality_id' => 163,
                'name' => 'شاطايا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'state_id' => 17,
                'locality_id' => 164,
                'name' => 'السنطة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'state_id' => 17,
                'locality_id' => 165,
                'name' => 'الوحدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'state_id' => 17,
                'locality_id' => 166,
                'name' => 'بليل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'state_id' => 17,
                'locality_id' => 167,
                'name' => 'جوغانة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'state_id' => 17,
                'locality_id' => 167,
                'name' => 'قريضة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'state_id' => 17,
                'locality_id' => 168,
                'name' => 'السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'state_id' => 12,
                'locality_id' => 112,
                'name' => 'السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'state_id' => 17,
                'locality_id' => 169,
                'name' => 'كتيلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'state_id' => 17,
                'locality_id' => 169,
                'name' => 'خور شمام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'state_id' => 17,
                'locality_id' => 170,
                'name' => 'برام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'state_id' => 17,
                'locality_id' => 171,
                'name' => 'كاس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'state_id' => 17,
                'locality_id' => 172,
                'name' => 'تلس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'state_id' => 17,
                'locality_id' => 173,
                'name' => 'ام لباسة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'state_id' => 17,
                'locality_id' => 173,
                'name' => 'ديري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'state_id' => 17,
                'locality_id' => 173,
                'name' => 'كيم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'state_id' => 17,
                'locality_id' => 173,
                'name' => 'ام زعيفة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'state_id' => 17,
                'locality_id' => 173,
                'name' => 'عدالفرسان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'state_id' => 17,
                'locality_id' => 174,
                'name' => 'نيالا ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'state_id' => 17,
                'locality_id' => 175,
                'name' => 'طوال',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'state_id' => 17,
                'locality_id' => 176,
                'name' => 'كتم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'state_id' => 13,
                'locality_id' => 115,
                'name' => 'كتم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'state_id' => 17,
                'locality_id' => 177,
                'name' => 'الملم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'state_id' => 17,
                'locality_id' => 178,
                'name' => 'ابو ري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'state_id' => 17,
                'locality_id' => 178,
                'name' => 'رهيد البردي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'state_id' => 17,
                'locality_id' => 179,
                'name' => 'نيالا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'state_id' => 17,
                'locality_id' => 180,
                'name' => 'كبم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'state_id' => 17,
                'locality_id' => 181,
                'name' => 'انتيكينا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'state_id' => 17,
                'locality_id' => 182,
                'name' => 'ام دافوق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'state_id' => 17,
                'locality_id' => 183,
                'name' => 'دمسو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'state_id' => 17,
                'locality_id' => 184,
                'name' => 'مرشنج',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'state_id' => 17,
                'locality_id' => 185,
                'name' => 'نيالا ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'state_id' => 17,
                'locality_id' => 186,
                'name' => 'ود هجام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'state_id' => 18,
                'locality_id' => 187,
                'name' => 'التضامن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'state_id' => 18,
                'locality_id' => 188,
                'name' => 'الروصيرص',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'state_id' => 18,
                'locality_id' => 189,
                'name' => 'الدمازين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'state_id' => 18,
                'locality_id' => 190,
                'name' => 'قيسان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'state_id' => 18,
                'locality_id' => 191,
                'name' => 'باو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'state_id' => 18,
                'locality_id' => 192,
                'name' => 'الكرمك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}