<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('localities')->delete();
        
        \DB::table('localities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state_id' => 1,
                'name' => 'محلية بحري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'state_id' => 1,
                'name' => 'محلية أمدرمان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'state_id' => 1,
                'name' => 'محلية كرري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'state_id' => 1,
                'name' => 'محلية أمبدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'state_id' => 1,
                'name' => 'محلية شرق النيل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'state_id' => 1,
                'name' => 'محلية الخرطوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'state_id' => 1,
                'name' => 'محلية جبل أولياء',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'state_id' => 2,
                'name' => 'محلية حلايب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'state_id' => 2,
                'name' => 'محلية بورتسودان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'state_id' => 2,
                'name' => 'محلية سنكات',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'state_id' => 2,
                'name' => 'محلية سواكن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'state_id' => 2,
                'name' => 'محلية عقيق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'state_id' => 2,
                'name' => ' محلية هيا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'state_id' => 2,
                'name' => 'محلية درديب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'state_id' => 2,
                'name' => 'محلية القنب والاوليب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'state_id' => 2,
                'name' => 'محلية ريف البلك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'state_id' => 2,
                'name' => 'محلية طوكر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'state_id' => 2,
                'name' => 'محلية جبيت المعادن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'state_id' => 3,
                'name' => 'محلية نهر عطبرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'state_id' => 3,
                'name' => 'محلية كسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'state_id' => 3,
                'name' => 'محلية همشكوريب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'state_id' => 3,
                'name' => 'محلية ريفي كسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'state_id' => 3,
                'name' => 'محلية اروما',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'state_id' => 3,
                'name' => 'محلية ود الحليو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'state_id' => 3,
                'name' => 'محلية تلكوك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'state_id' => 3,
                'name' => 'محلية حلفا الجديدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'state_id' => 3,
                'name' => 'محلية خشم القربة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'state_id' => 3,
                'name' => 'محلية غرب كسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'state_id' => 3,
                'name' => 'محلية شمال الدلتا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'state_id' => 4,
                'name' => 'محلية الفاو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'state_id' => 4,
                'name' => 'محلية الفشقة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'state_id' => 4,
                'name' => 'محلية بلدية القضارف',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'state_id' => 4,
                'name' => 'محلية الرهد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'state_id' => 4,
                'name' => 'محلية المفازة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'state_id' => 4,
                'name' => 'محلية القلابات الغربية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'state_id' => 4,
                'name' => 'محلية قلع النحل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'state_id' => 4,
                'name' => 'محلية البطانة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'state_id' => 4,
                'name' => 'محلية باسندا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'state_id' => 4,
                'name' => 'محلية وسط القضارف',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'state_id' => 4,
                'name' => 'محلية القلابات الشرقية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'state_id' => 4,
                'name' => 'محلية القريشة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'state_id' => 5,
                'name' => 'محلية وادي حلفا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'state_id' => 5,
                'name' => 'محلية دنقلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'state_id' => 5,
                'name' => 'محلية مروي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'state_id' => 5,
                'name' => 'محلية البرقيق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'state_id' => 5,
                'name' => 'محلية القولد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'state_id' => 5,
                'name' => 'محلية الدبة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'state_id' => 5,
                'name' => 'محلية دلقو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'state_id' => 5,
                'name' => 'محلية كريمة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'state_id' => 6,
                'name' => 'محلية أبو حمد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'state_id' => 6,
                'name' => 'محلية بربر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'state_id' => 6,
                'name' => 'محلية الدامر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'state_id' => 6,
                'name' => 'محلية المتمة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'state_id' => 6,
                'name' => 'محلية البحيرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'state_id' => 6,
                'name' => 'محلية عطبرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'state_id' => 6,
                'name' => 'محلية شندي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'state_id' => 7,
                'name' => 'محلية الكاملين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'state_id' => 7,
                'name' => 'محلية شرق الجزيرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'state_id' => 7,
                'name' => 'محلية المناقل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'state_id' => 7,
                'name' => 'محلية مدني الكبري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'state_id' => 7,
                'name' => 'محلية ام القرى',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'state_id' => 7,
                'name' => 'محلية القرشي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'state_id' => 7,
                'name' => 'محلية الحصاحيصا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'state_id' => 7,
                'name' => 'محلية جنوب الجزيرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'state_id' => 8,
                'name' => 'محلية القطينة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'state_id' => 8,
                'name' => 'محلية كوستي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'state_id' => 8,
                'name' => 'محلية الجبلين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'state_id' => 8,
                'name' => 'محلية ام رمته',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'state_id' => 8,
                'name' => 'محلية الدويم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'state_id' => 8,
                'name' => 'محلية تندلتي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'state_id' => 8,
                'name' => 'محلية ربك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'state_id' => 9,
                'name' => 'محلية سنجة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'state_id' => 9,
                'name' => 'محلية الدندر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'state_id' => 9,
                'name' => 'محلية شرق سنار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'state_id' => 9,
                'name' => 'محلية السوكي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'state_id' => 9,
                'name' => 'محلية ابو حجار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'state_id' => 9,
                'name' => 'محلية سنار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'state_id' => 9,
                'name' => 'محلية الدالي والمزموم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'state_id' => 10,
                'name' => 'محلية النهود',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'state_id' => 10,
                'name' => 'محلية الفولة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'state_id' => 10,
                'name' => 'محلية غبيش',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'state_id' => 10,
                'name' => 'محلية ابيي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'state_id' => 10,
                'name' => ' محلية بابنوسة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'state_id' => 10,
                'name' => ' محلية الخوي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'state_id' => 10,
                'name' => 'محلية الاضية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'state_id' => 10,
                'name' => 'كيلك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'state_id' => 10,
                'name' => 'الشنوط',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'state_id' => 10,
                'name' => 'محلية أبوزبد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'state_id' => 10,
                'name' => 'السلام ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'state_id' => 11,
                'name' => 'محلية جبرة الشيخ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'state_id' => 11,
                'name' => 'محلية بارا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'state_id' => 11,
                'name' => 'محلية أم روابة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'state_id' => 11,
                'name' => 'محلية الرهد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'state_id' => 11,
                'name' => 'محلية سودري',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'state_id' => 11,
                'name' => 'محلية ام دم حاج احمد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'state_id' => 11,
                'name' => 'محلية شيكان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'state_id' => 11,
                'name' => 'محلية غرب بارا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'state_id' => 12,
                'name' => 'محلية كادقلي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'state_id' => 12,
                'name' => 'محلية تلودي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'state_id' => 12,
                'name' => 'محلية رشاد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'state_id' => 12,
                'name' => 'محلية الدلنج',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'state_id' => 12,
                'name' => 'محلية القوز',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'state_id' => 12,
                'name' => 'محلية دلامي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'state_id' => 12,
                'name' => 'محلية ام دورين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'state_id' => 12,
                'name' => 'محلية هيبان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'state_id' => 12,
                'name' => 'محلية العباسية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'state_id' => 12,
                'name' => 'ابو جبيهه',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'state_id' => 12,
                'name' => 'ابو كرشولا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'state_id' => 12,
                'name' => 'كلوقي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'state_id' => 12,
                'name' => 'طوطاح',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'state_id' => 12,
                'name' => 'التضامن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'state_id' => 12,
                'name' => 'محلية السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'state_id' => 12,
                'name' => 'محلية هبيلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'state_id' => 12,
                'name' => 'محلية الريف الشرقي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'state_id' => 13,
                'name' => 'محلية كتم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'state_id' => 13,
                'name' => 'محلية ام كدادة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'state_id' => 13,
                'name' => 'محلية مليط',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'state_id' => 13,
                'name' => 'محلية اللعيت',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'state_id' => 13,
                'name' => 'محلية الطويشة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'state_id' => 13,
                'name' => 'محلية الطينة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'state_id' => 13,
                'name' => 'محلية ام برو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'state_id' => 13,
                'name' => 'محلية كلمندو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'state_id' => 13,
                'name' => 'محلية الكومة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'state_id' => 13,
                'name' => 'محلية كورناي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'state_id' => 13,
                'name' => 'محلية الواحة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'state_id' => 13,
                'name' => 'محلية طويلة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'state_id' => 13,
                'name' => 'محلية المالحة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'state_id' => 13,
                'name' => 'محلية سرف عمرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'state_id' => 13,
                'name' => 'محلية الفاشر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'state_id' => 13,
                'name' => 'محلية كبكابية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'state_id' => 13,
                'name' => 'محلية السريف',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'state_id' => 13,
                'name' => 'محلية دار السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'state_id' => 14,
                'name' => 'محلية الضعين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'state_id' => 14,
                'name' => 'محلية شعيرية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'state_id' => 14,
                'name' => 'محلية بحر العرب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'state_id' => 14,
                'name' => 'محلية عسلاية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'state_id' => 14,
                'name' => 'محلية الفردوس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'state_id' => 14,
                'name' => 'محلية ياسين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'state_id' => 14,
                'name' => 'محلية أبو جابرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'state_id' => 14,
                'name' => 'محلية عديلة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'state_id' => 14,
                'name' => 'محلية أبو كارنكا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'state_id' => 15,
                'name' => 'محلية كلبس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'state_id' => 15,
                'name' => 'محلية هبيلة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'state_id' => 15,
                'name' => 'محلية سربا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'state_id' => 15,
                'name' => 'محلية كرينك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'state_id' => 15,
                'name' => 'محلية جبل مون',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'state_id' => 15,
                'name' => 'محلية فور برنقا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'state_id' => 15,
                'name' => 'محلية مورني',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'state_id' => 15,
                'name' => 'محلية بيضة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'state_id' => 15,
                'name' => 'محلية الجنينة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'state_id' => 16,
                'name' => 'محلية نرتتي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'state_id' => 16,
                'name' => 'قارسلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'state_id' => 16,
                'name' => 'محلية زالنجي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'state_id' => 16,
                'name' => 'محلية أم دخن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'state_id' => 16,
                'name' => 'محلية مكجر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'state_id' => 16,
                'name' => 'محلية أزوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'state_id' => 16,
                'name' => 'محلية بندسي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'state_id' => 16,
                'name' => 'محلية روكورو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'state_id' => 16,
                'name' => 'محلية جبل مرة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'state_id' => 16,
                'name' => 'محلية وادي صالح',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'state_id' => 17,
                'name' => 'محلية الردوم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'state_id' => 17,
                'name' => 'محلية نتيقا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'state_id' => 17,
                'name' => 'محلية شاطايا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'state_id' => 17,
                'name' => 'محلية السنطة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'state_id' => 17,
                'name' => 'محلية الوحدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'state_id' => 17,
                'name' => 'محلية بليل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'state_id' => 17,
                'name' => 'محلية قريضة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'state_id' => 17,
                'name' => 'محلية السلام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'state_id' => 17,
                'name' => 'محلية كتيلا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'state_id' => 17,
                'name' => 'محلية برام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'state_id' => 17,
                'name' => 'محلية كاس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'state_id' => 17,
                'name' => 'محلية تلس',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'state_id' => 17,
                'name' => 'محلية عد الفرسان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'state_id' => 17,
                'name' => 'محلية نيالا شمال',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'state_id' => 17,
                'name' => 'طوال',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'state_id' => 17,
                'name' => 'محلية كتم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'state_id' => 17,
                'name' => 'محلية شرق الجبل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'state_id' => 17,
                'name' => 'محلية رهيد البردي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'state_id' => 17,
                'name' => 'محلية نيالا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'state_id' => 17,
                'name' => 'كبم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'state_id' => 17,
                'name' => 'انتكينا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'state_id' => 17,
                'name' => 'محلية أم دافوق',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'state_id' => 17,
                'name' => 'محلية دمسو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'state_id' => 17,
                'name' => 'محلية مرشنج',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'state_id' => 17,
                'name' => 'نيالا جنوب',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'state_id' => 17,
                'name' => 'ود هجام',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'state_id' => 18,
                'name' => 'محلية التضامن',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'state_id' => 18,
                'name' => 'محلية الروصيرص',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'state_id' => 18,
                'name' => 'محلية الدمازين',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'state_id' => 18,
                'name' => 'محلية قيسان',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'state_id' => 18,
                'name' => 'محلية باو',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'state_id' => 18,
                'name' => 'محلية الكرمك',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}