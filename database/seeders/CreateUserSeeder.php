<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'حسين خالد الحاج',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('123'),
            'roles_name' => ["owner"],
            'status' => 'مفعل',
            'office_id' => '1',
        ]);

        $user2 = User::create([
            'name' => 'علي عمر الحاج',
            'email' => 'bh@admin.com',
            'username' => 'admin2',
            'password' => bcrypt('123'),
            'roles_name' => ["owner"],
            'status' => 'مفعل',
            'office_id' => '2',
        ]);

        $user3 = User::create([
            'name' => 'حسين خالد الحاج',
            'email' => 'kh@admin.com',
            'username' => 'admin3',
            'password' => bcrypt('123'),
            'roles_name' => ["owner"],
            'status' => 'مفعل',
            'office_id' => '3',
        ]);
        $user4 = User::create([
            'name' => 'عماد المحاسب',
            'email' => 'acc@admin.com',
            'username' => 'admin4',
            'password' => bcrypt('123'),
            'roles_name' => ["accountant"],
            'status' => 'مفعل',
            'office_id' => '1',
        ]);

        $user66 = User::create([
            'name' => 'مدير مكتب وادي حلفا',
            'email' => 'custom_admin@admin.com',
            'username' => 'adminH',
            'password' => bcrypt('123'),
            'roles_name' => ["owner"],
            'status' => 'مفعل',
            'office_id' => '184',
        ]);

        $user5 = User::create([
            'name' => 'معتصم عمران',
            'email' => 'ins@admin.com',
            'username' => 'ins1',
            'password' => bcrypt('123'),
            'roles_name' => ["مفتش"],
            'status' => 'مفعل',
            'office_id' => '1',
        ]);

        $custom_user = User::create([
            'name' => 'مفتش مكتب وادي حلفا',
            'email' => 'custom@admin.com',
            'username' => 'custom',
            'password' => bcrypt('123'),
            'roles_name' => ["جمارك"],
            'status' => 'مفعل',
            'office_id' => '184',
        ]);

        $custom_acc_user = User::create([
            'name' => 'محاسب مكتب وادي حلفا',
            'email' => 'custom_acc@admin.com',
            'username' => 'custom_acc',
            'password' => bcrypt('123'),
            'roles_name' => ["accountant"],
            'status' => 'مفعل',
            'office_id' => '184',
        ]);

        $role = Role::create(['name' => 'owner']);
        $role_accountant = Role::create(['name' => 'accountant']);
        $role_inspector = Role::create(['name' => 'مفتش']);
        $role_custom = Role::create(['name' => 'جمارك']);

        $permissions = Permission::pluck('id', 'id')->all();
        Permission::create(['name' => 'محاسب']);
        Permission::create(['name' => 'جمارك']);
        $account_perm = ['محاسب','التقارير','تقارير الحسابات'];
        $custom_perm = ['جمارك','العمليات','تقارير جمارك','التقارير'];
        $permissions_accountant = Permission::whereIn('name', $account_perm)->get();
        $permissions_custom = Permission::whereIn('name', $custom_perm)->get();
        //$permissions_accountant1 = Permission::where('name', 'التقارير')->get();
        //$permissions_accountant2 = Permission::where('name', 'تقارير الحسابات')->get();
        $inspector_perm = ['الاعدادات','العمليات','التقارير','تقارير المخالفات','تقارير المنفستو','المنفستو','المخالفات','المرحلين','اضافة مرحل',
        'حذف مرحل','تعديل مرحل','اضافة منفستو','عرض منفستو','حذف منفستو','تعديل منفستو','اضافة مخالفة','حذف مخالفة','تعديل مخالفة',
        'تسجيل مخالف','نوع مخالفة','المحليات','المدن'];
        $permissions_ins1 = Permission::whereIn('name', $inspector_perm)->get();
        $role->syncPermissions($permissions);
        $role_accountant->syncPermissions($permissions_accountant);
        //$role_accountant->syncPermissions($permissions_accountant1);
       // $role_accountant->syncPermissions($permissions_accountant2);
        $role_inspector->syncPermissions($permissions_ins1);
        $role_custom->syncPermissions($permissions_custom);

        $user->assignRole([$role->id]);
        $user2->assignRole([$role->id]);
        $user3->assignRole([$role->id]);
        $user4->assignRole([$role_accountant->id]);
        $user5->assignRole([$role_inspector->id]);
        $user66->assignRole([$role_inspector->id]);
        $custom_user->assignRole([$role_custom->id]);
        $custom_acc_user->assignRole([$role_accountant->id]);
    }
}
