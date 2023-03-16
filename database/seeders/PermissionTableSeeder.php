<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [


            'المستخدمين',
            'قائمة المستخدمين',
            'صلاحيات المستخدمين',


            'تصدير EXCEL',

            'اضافة مستخدم',
            'تعديل مستخدم',
            'حذف مستخدم',

            'عرض صلاحية',
            'اضافة صلاحية',
            'تعديل صلاحية',
            'حذف صلاحية',

            'الإشعارات',
            'المرحلين',
            'المنفستو',
            'تقارير المنفستو',
            'المخالفات',
            'تقارير المخالفات',

            'تقارير الحسابات',


            'اضافة مرحل',
            'تعديل مرحل',
            'حذف مرحل',
            'عرض مرحل',

            'اضافة منفستو',
            'تعديل منفستو',
            'حذف منفستو',
            'عرض منفستو',



            'نوع مخالفة',
            'اضافة مخالفة',
            'تعديل مخالفة',
            'حذف مخالفة',
            'تسجيل مخالف',

            'التقارير',
            'الاعدادات',
            'العمليات',
            'المحليات',
            'المدن',
            'تقارير جمارك',

            'الوحدات',
            'تصنيفات',
            'بضائع',
            'مسارات',
            'حموله',
            'لوائح',

            'بورصه',
            'تصنيفات المخاطر',
            'انواع المخاطر',
            'حزم المخاطر',
            'درجة الخطر',
            'امكانية الخطر',
            'سجل المخاطر',


        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
