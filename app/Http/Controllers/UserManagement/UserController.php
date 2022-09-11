<?php

namespace App\Http\Controllers\UserManagement;

use App\Models\User;
use Illuminate\Http\Request;
//custom Spatie\Permission
use Illuminate\Support\Facades\DB;
//use App\User;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:المستخدمين');
    }
    public function index(Request $request)
    {
        $data = User::where('office_id',Auth::user()->office->id)->orderBy('id', 'DESC')->paginate(5);
        return view('users.show_users', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.Add_user', compact('roles'));
    }
    public function store(Request $request)
    {
       // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|same:confirm-password',
            'roles_name' => 'required',
            'office_id' => 'required'
        ],[
            'office_id' => 'الرجاء تحديد المكتب'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles_name'));

        return redirect()->route('users.index')
            ->with('success', 'تم إضافة المستخدم بنجاح');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'username' => 'required|unique:users,username,'.$id,
            'password' => 'same:confirm-password',
            'roles_name' => 'required',
            'status' => 'required',
            'office_id' => 'required'
        ],[
            'office_id' => 'الرجاء تحديد المكتب'
        ]);

        //dd($request->status);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles_name'));

        return redirect()->route('users.index')
            ->with('success', 'تم تعديل المستخدم بنجاح');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'تم حذف المستخدم بنجاح');
    }
}
