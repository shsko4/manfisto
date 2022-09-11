<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('offices')->delete();

        \DB::table('offices')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'نافذة امدرمان',
                'deleted_at' => NULL,
                'created_at' => '2022-09-11 08:42:09',
                'updated_at' => '2022-09-11 08:42:09',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'نافذة بحري',
                'deleted_at' => NULL,
                'created_at' => '2022-09-11 08:42:09',
                'updated_at' => '2022-09-11 08:42:09',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'نافذة الخرطوم',
                'deleted_at' => NULL,
                'created_at' => '2022-09-11 08:42:09',
                'updated_at' => '2022-09-11 08:42:09',
            ),
            3 =>
            array (
                'id' => 18,
                'name' => 'المركز الضريبي الموحد للشركات الكبري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 19,
                'name' => 'المركز الضريبي الموحد للشركات الوسطي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 20,
                'name' => 'المركز الضريبي الموحد الخرطوم جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 21,
                'name' => 'المركز الضريبي الموحد الخرطوم شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 22,
                'name' => 'المركز الضريبي الموحد الخرطوم شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 23,
                'name' => 'المركز الضريبي الموحد الخرطوم بحري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 24,
                'name' => 'المركز الضريبي الموحد امدرمان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 29,
                'name' => 'مكتب الخرطوم للدمغة الإتحادية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 33,
                'name' => 'ادارة التسجيل الخرطوم',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 36,
                'name' => 'مكتب الخرطوم للدخل الشخصي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 37,
                'name' => 'مكتب الخرطوم شمال للقيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 38,
                'name' => 'مكتب الخرطوم شرق للقيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 41,
                'name' => 'مكتب الخرطوم بحري للقيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 44,
                'name' => 'مكتب امدرمان للدمغة الإتحادية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 47,
                'name' => 'مكتب سوق ليبيا للقيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 48,
                'name' => 'مكتب بحري للدمغة الإتحادية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 49,
                'name' => 'مكتب بحري للدخل الشخصي ',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 50,
                'name' => 'مكتب الخرطوم جنوب للدمغة الاتحادية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 51,
                'name' => 'مكتب امدرمان للدخل الشخصي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 65,
                'name' => 'مكتب ضرائب الكلاكلة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 66,
                'name' => 'مكتب ضرائب السوق المحلى',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 67,
                'name' => 'مكتب ضرائب الخرطوم جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 68,
                'name' => 'مكتب ضرائب تجار السجانة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 69,
                'name' => 'مكتب ضرائب العمارات',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 70,
                'name' => 'مكتب ضرائب السجانة جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 71,
                'name' => 'مكتب ضرائب الصحافة والنزهة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 72,
                'name' => 'مكتب ضرائب الرياض',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 73,
                'name' => 'مكتب ضرائب المعمورة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 74,
                'name' => 'مكتب ضرائب تجار الخرطوم غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 75,
                'name' => 'مركز كبار الممولين الخرطوم',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 76,
                'name' => 'مكتب ضرائب المهنين الخرطوم جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 77,
                'name' => 'مكتب ضرائب السوق الشعبى امدرمان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 78,
                'name' => 'مكتب ضرائب امدرمان شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 79,
                'name' => 'مكتب ضرائب المهندسين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 80,
                'name' => 'مكتب ضرائب سوق ليبيا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 81,
                'name' => 'مكتب ضرائب امبدة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 82,
                'name' => 'مكتب ضرائب تجار امدرمان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 83,
                'name' => 'مكتب ضرائب الثورة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 84,
                'name' => 'مكتب ضرائب امدرمان وسط',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 85,
                'name' => 'مركز كبار الممولين امدرمان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 86,
                'name' => 'مكتب ضرائب الدمغة امدرمان غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 87,
                'name' => 'مكتب ضرائب المهنين امدرمان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 88,
                'name' => 'مكتب ضرائب بحرى وسط',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 89,
                'name' => 'مكتب ضرائب تجار بحرى',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 90,
                'name' => 'مكتب ضرائب شرق النيل',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 91,
                'name' => 'مكتب ضرائب بحرى شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 92,
                'name' => 'مكتب ضرائب المنطقة الصناعية بحري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 93,
                'name' => 'مكتب ضرائب شمبات',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 94,
                'name' => 'مركز كبار الممولين بحري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 95,
                'name' => 'مكتب ضرائب تجار الخرطوم شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 97,
                'name' => 'مكتب ضرائب حي العرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 98,
                'name' => 'مكتب ضرائب المهنيين بحري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 99,
                'name' => 'مكتب ضرائب العقارات الخرطوم شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 100,
                'name' => 'مكتب ضرائب الدمغة الولائية الخرطوم جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 101,
                'name' => 'مكتب ضرائب الدمغة الولائية بحري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 102,
                'name' => 'مكتب ضرائب الدمغة الولائية الخرطوم شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 103,
                'name' => 'مكتب ضرائب المهنيين الخرطوم شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 105,
            'name' => 'الادارة الولائية (ب) الجزيرة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 106,
                'name' => 'مكتب ضرائب مدني شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 111,
                'name' => 'المركز الضريبي الموحد مدني',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 114,
                'name' => 'مكتب ضرائب مدني شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 116,
                'name' => 'مكتب ضرائب مدني جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 117,
                'name' => 'مكتب ضرائب مدنى النوعى',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 118,
                'name' => 'مكتب ضرائب مدني الإتحادي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 120,
                'name' => 'مكتب ضرائب طابت',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 121,
                'name' => 'مكتب ضرائب الحوش',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 122,
                'name' => 'مكتب ضرائب تمبول',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 123,
                'name' => 'مكتب ضرائب رفاعة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 124,
                'name' => 'نافذة تحصيل المدينة عرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 125,
                'name' => 'مكتب ضرائب أبوقوتة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 126,
                'name' => 'مكتب ضرائب العزازي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 127,
                'name' => 'مكتب ضرائب أم القري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 128,
                'name' => 'مكتب ضرائب الكاملين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 129,
                'name' => 'مكتب ضرائب المناقل تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 130,
                'name' => 'مكتب ضرائب القيمة المضافة الجديد الثورة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 131,
                'name' => 'مكتب ضرائب الجديد الثورة تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 132,
                'name' => 'مكتب ضرائب الحاج عبدالله',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 134,
                'name' => 'مكتب ضرائب الحصاحيصا تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 135,
                'name' => 'مكتب ضرائب المناقل النوعى',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 136,
                'name' => 'مكتب ضرائب القيمة المضافة المناقل',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 137,
                'name' => 'مكتب ضرائب الحصاحيصا النوعي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 138,
                'name' => 'مكتب ضرائب القيمة المضافة الحصاحيصا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 144,
                'name' => 'مكتب ضرائب المنطقة الصناعية كوستي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 145,
                'name' => 'مكتب ضرائب القيمة المضافة كوستي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 146,
                'name' => 'مكتب النقاط الخارجية النيل الأبيض',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 147,
                'name' => 'مكتب ضرائب السوق المركزي كوستي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 148,
                'name' => 'مكتب ضرائب كبار الممولين - كوستي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 149,
                'name' => 'مكتب ضرائب السوق الشعبي كوستي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 151,
                'name' => 'مكتب ضرائب المنطقة الصناعية ربك',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 153,
                'name' => 'مكتب ضرائب السوق المركزي ربك',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 154,
                'name' => 'مكتب ضرائب الدويم',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 155,
                'name' => 'مكتب ضرائب تندلتي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 156,
                'name' => 'مكتب ضرائب القطينة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 157,
                'name' => 'مكتب ضرائب الجبلين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 159,
                'name' => 'الإدارة العامة لضرائب ولاية سنار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 160,
                'name' => 'مكتب ضريبة القيمة المضافة سنار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 161,
                'name' => 'مكتب الرقابة سنار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 162,
                'name' => 'مكتب ضرائب سنار تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 165,
                'name' => 'مكتب ضرائب المنطقة الصناعية سنار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 166,
                'name' => 'مكتب ضرائب سنار الدمغة والدخل الشخصي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 167,
                'name' => 'مكتب ضرائب الدمغة والدخل الشخصي سنجة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 168,
                'name' => 'مكتب ضرائب سنجة تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 169,
                'name' => 'مكتب ضرائب كركوج',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 170,
                'name' => 'مكتب ضرائب الدندر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 171,
                'name' => 'مكتب ضرائب السوكي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 172,
                'name' => 'مكتب ضرائب المزموم',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 173,
                'name' => 'مكتب ضرائب ود النيل',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 174,
                'name' => 'الإدارة العامة لضرائب الولاية الشمالية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 175,
                'name' => 'مكتب المعلومات والتحصيل المقدم الشمالية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 176,
                'name' => 'مكتب ضرائب دنقلا تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 177,
                'name' => 'مكتب ضرائب دنقلا الإتحادي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 178,
                'name' => 'مكتب ضرائب القيمة المضافة دنقلا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 179,
                'name' => 'نافذة وزارة الاستثمار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 180,
                'name' => 'مكتب ضرائب المنطقة الجنوبية كريمة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 181,
                'name' => 'مكتب ضرائب كريمة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 182,
                'name' => 'مكتب ضرائب مروي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 183,
                'name' => 'مكتب ضرائب الدبة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 184,
                'name' => 'مكتب ضرائب وادي حلفا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 185,
                'name' => 'مكتب ضرائب القولد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 186,
                'name' => 'مكتب ضرائب البرقيق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 209,
                'name' => 'الإدارة العامة لضرائب ولاية نهر النيل',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 210,
                'name' => 'مكتب ضرائب إدارة المعلومات عطبره',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 211,
                'name' => 'مكتب ضرائب عطبرة الدمغة والدخل الشخصي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 212,
                'name' => 'مكتب ضرائب الدمغة الولائية و العقارات عطبرة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 213,
                'name' => 'مكتب ضرائب عطبرة تجار جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 214,
                'name' => 'مكتب القيمة المضافة عطبرة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 215,
                'name' => 'مكتب ضرائب الدمغه الولائية والعقارات شندي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 216,
                'name' => 'نقطة تحصيل الميناء البري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 217,
                'name' => 'مكتب ضرائب تجار شندى غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 218,
                'name' => 'مكتب ضرائب شندي الإتحادي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 219,
                'name' => 'مكتب ضرائب القطاع الجنوبي شندي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 220,
                'name' => 'مكتب ضرائب بربر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 221,
                'name' => 'مكتب ضرائب أبوحمد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 222,
                'name' => 'مكتب ضرائب الدامر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 223,
                'name' => 'مكتب ضرائب المتمة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 224,
                'name' => 'الإدارة العامة لضرائب ولاية البحر الأحمر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 225,
                'name' => 'مكتب ضرائب المعلومات والتحصيل المقدم بورتسودان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 226,
                'name' => 'مكتب ضرائب بورتسودان شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 227,
                'name' => 'مكتب ضرائب بورتسودان غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 228,
                'name' => 'مكتب ضرائب بورتسودان النوعي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 229,
                'name' => 'مكتب ضرائب الأحياء بورتسودان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 230,
                'name' => 'مكتب ضرائب العقارات بورتسودان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 232,
                'name' => 'مكتب ضرائب السوق الشعبي بورتسودان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 233,
                'name' => 'المركز الضريبى الموحد بورتسودان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 234,
                'name' => 'مكتب ضرائب سواكن',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 238,
                'name' => 'مكتب ضرائب كسلا النوعي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 239,
                'name' => 'مكتب ضرائب كسلا شرق تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 240,
                'name' => 'مكتب ضرائب المعلومات كسلا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 241,
                'name' => 'مكتب القيمة المضافة كسلا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 242,
                'name' => 'مكتب ضرائب كسلا الإتحادي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 243,
                'name' => 'مكتب ضرائب كسلا غرب تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 244,
                'name' => 'مكتب ضرائب كسلا غرب القاش',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 245,
                'name' => 'مكتب ضرائب حلفا الجديدة تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 246,
                'name' => 'مكتب ضرائب حلفا الجديدة النوعي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 247,
                'name' => 'مكتب ضرائب حلفا الجديدة القيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 248,
                'name' => 'مكتب ضرائب حلفا الجديدة الإتحادي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 249,
                'name' => 'مكتب ضرائب خشم القربة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 259,
                'name' => 'مكتب ضرائب الادارة الفنية القضارف',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 260,
                'name' => 'مكتب ضرائب المعلومات والدفع المقدم وتنمية الايرادات  القضارف',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 261,
                'name' => 'مكتب ضرائب القضارف غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 262,
                'name' => 'مكتب ضرائب القضارف العقارات',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 263,
                'name' => 'مكتب ضرائب القضارف النوعي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 264,
                'name' => 'مكتب ضرائب القضارف جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 265,
                'name' => 'مركز كبار الممولين القضارف',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 266,
                'name' => 'مكتب ضرائب القضارف المنطقة الصناعية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 267,
                'name' => 'مكتب ضرائب الفاو',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 268,
                'name' => 'مكتب ضرائب الشواك',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 269,
                'name' => 'مكتب ضرائب الحواتة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 277,
                'name' => 'نقطة تحصيل السوق الشعبي القضارف',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 286,
                'name' => 'مكتب المعلومات - ضرائب شمال كردفان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 287,
                'name' => 'مكتب ضرائب الأبيض جنوب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 288,
                'name' => 'مكتب ضرائب الأبيض شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 289,
                'name' => 'مكتب ضرائب الأبيض القيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 290,
                'name' => 'مكتب ضرائب الأبيض الدمغة الولائية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 291,
                'name' => 'مكتب ضرائب الأبيض المنطقة وأرياف شيكان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 292,
                'name' => 'مكتب ضرائب الدمغة والدخل الشخصى الأبيض',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 293,
                'name' => 'مكتب ضرائب أم روابة القيمة المضافة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 294,
                'name' => 'مكتب ضرائب بارا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 295,
                'name' => 'مكتب ضرائب الرهد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 296,
                'name' => 'مكتب ضرائب سودرى',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 297,
                'name' => 'مكتب ضرائب أم روابة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 298,
                'name' => 'مكتب ضرائب جبرة الشيخ',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 300,
                'name' => 'مكتب القيمة المضافة النهود',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 301,
                'name' => 'عمومي النهود',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 302,
                'name' => 'مكتب ضرائب غبيش',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 303,
                'name' => 'مكتب ضرائب المجلد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 304,
                'name' => 'مكتب ضرائب بابنوسه',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 306,
                'name' => 'نقطة تحصيل ابو زبد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 310,
                'name' => 'نقطة تحصيل المجلد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 312,
                'name' => 'مكتب ضرائب ابوزبد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 313,
                'name' => 'مكتب ضرائب تجار النهود',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 317,
                'name' => 'مكتب ضرائب الفولة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 318,
                'name' => 'نقطة تحصيل الميرم',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 323,
                'name' => 'الإدارة العامة لضرائب ولاية جنوب كردفان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 324,
                'name' => 'مكتب ضرائب كادقلي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 325,
                'name' => 'مكتب ضرائب الدلنج',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 326,
                'name' => 'مكتب ضرائب أبوجبيهة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 327,
                'name' => 'مكتب ضرائب العباسية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array (
                'id' => 328,
                'name' => 'نقطة تحصيل أبوكرشولا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 338,
                'name' => 'نقطة تحصيل سوق ابوجبيهة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 351,
                'name' => 'مكتب القيمة المضافة الفاشر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 352,
                'name' => 'مكتب ضرائب الفاشر الدمغة والارباح الراسمالية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 353,
                'name' => 'مكتب ضرائب الدخل الشخصى والإيرادات الفاشر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 354,
                'name' => 'مركز كبار الممولين الفاشر',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 355,
                'name' => 'مكتب ضرائب العقارات شمال دارفور',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 356,
                'name' => 'مكتب ضرائب اللعيت',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 357,
                'name' => 'مكتب ضرائب كتم',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 358,
                'name' => 'مكتب ضرائب كبكابية',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 359,
                'name' => 'مكتب ضرائب سرف عمرة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 360,
                'name' => 'مكتب ضرائب مليط',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 364,
                'name' => 'مكتب الدفع المقدم والمعلومات',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 368,
                'name' => 'مكتب ضرائب اللعيد جار النبي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 388,
                'name' => 'مكتب ضرائب الإتحادي شرق دارفور',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 389,
                'name' => 'مكتب ضرائب الضعين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 391,
                'name' => 'نافذة محلية الضعين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 393,
                'name' => 'نافذة محلية ياسين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 396,
                'name' => 'نافذة محلية عديلة',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 399,
                'name' => 'مكتب ضرائب الجنينة شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 400,
                'name' => 'مكتب ضرائب الجنينة غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 401,
                'name' => 'نافذة تحصيل فور برنقا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 404,
                'name' => 'مكتب ضرائب زالنجي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array (
                'id' => 407,
                'name' => 'نقطة تحصيل ام دخن',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array (
                'id' => 408,
                'name' => 'نقطة تحصيل نرتتي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array (
                'id' => 410,
                'name' => 'نقطة تحصيل قارسلا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array (
                'id' => 413,
                'name' => 'مكتب المعلومات والدفع المقدم نيالا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array (
                'id' => 414,
                'name' => 'مكتب ضرائب القيمة المضافة نيالا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array (
                'id' => 415,
                'name' => 'مكتب ضرائب نيالا وسط',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array (
                'id' => 416,
                'name' => 'مكتب ضرائب برام',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array (
                'id' => 417,
                'name' => 'مكتب ضرائب نيالا شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array (
                'id' => 418,
                'name' => 'مكتب ضرائب نيالا غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array (
                'id' => 419,
                'name' => 'مكتب ضرائب نيالا جنوب الإتحادي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array (
                'id' => 420,
                'name' => 'مكتب ضرائب رهيد البردي',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array (
                'id' => 421,
                'name' => 'مكتب المعلومات - نيالا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array (
                'id' => 433,
                'name' => 'مكتب البورصة نيالا',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array (
                'id' => 456,
                'name' => 'مكتب ضرائب المعلومات النيل الأزرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array (
                'id' => 457,
                'name' => 'مكتب ضرائب الدمغة والدخل - الدمازين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array (
                'id' => 458,
                'name' => 'مكتب ضرائب القيمة المضافة الدمازين',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array (
                'id' => 459,
                'name' => 'مكتب ضرائب الدمغة الولاية والعقارات النيل الازرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array (
                'id' => 460,
                'name' => 'مكتب ضرائب الرصيرص',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array (
                'id' => 461,
                'name' => 'مكتب ضرائب الدمازين تجار',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array (
                'id' => 462,
                'name' => 'مكتب ضرائب الموحد شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array (
                'id' => 483,
                'name' => 'المركز الضريبي الموحد الخرطوم غرب',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array (
                'id' => 492,
                'name' => 'مكتب القيمة المضافة بورتسودان',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array (
                'id' => 493,
                'name' => 'مكتب ضرائب تجار شندى شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array (
                'id' => 494,
                'name' => 'مكتب ضرائب عطبرة تجار شمال',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array (
                'id' => 601,
                'name' => 'مكتب ضرائب الكدرو',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array (
                'id' => 602,
                'name' => 'مكتب ضرائب الواحة كرري',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array (
                'id' => 603,
                'name' => 'مكتب ضرائب جبل اولياء',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array (
                'id' => 604,
                'name' => 'مكتب ضرائب القضارف شرق',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array (
                'id' => 605,
                'name' => 'مكتب ضرائب سوق ابوزيد',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
