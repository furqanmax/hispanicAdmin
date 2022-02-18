<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\Help;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdministrativerUserController extends Controller
{
    public function createUser()
    {
        $roles = Role::where('guard_name', 'admin')->pluck('name');
        return view('admin.adminstrative_users.create', compact('roles'));
    }

    public function storeUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|exists:roles,name'
        ]);

        $user = new Admin();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->created_by = Auth::guard('admin')->user()->id;

        $role = Role::where('name', $request->role)->first();
        if ($user->save()) {
            if ($user->assignRole($role)) {
                return redirect()->route('administrative.users')->with('success', 'Administrative User Created successfully');
            } else {
                $user->delete();
                return redirect()->back()->with('unsuccess', 'Unable to assign role to the user');
            }
        } else {
            return redirect()->back()->with('unsuccess', 'Unable to create administrative user');
        }
    }

    public function index()
    {
        $user = Auth::guard('admin')->user();

        $users = Admin::where('created_by', $user->id)->get();
        // return $users->first()->roles;
        return view('admin.adminstrative_users.index', compact('users'));
    }


    public function editUser($id)
    {
        $user = Admin::findOrFail($id);
        $roles = Role::select('id', 'name')->where('guard_name', 'admin')->get();
        return view('admin.adminstrative_users.edit', compact('roles', 'user'));
    }

    public function updateUser(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'string|min:8|confirmed',
            'role' => 'string|exists:roles,name'
        ]);

        try {
            $user = Admin::findOrFail($id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('unsuccess', 'unable to find user');
        }

        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }



        $role = Role::where('name', $request->role)->first();
        if ($user->update()) {
            if ($user->syncRoles([]) && $user->assignRole($role)) {
                return redirect()->route('administrative.users')->with('success', 'Administrative User Updated successfully');
            } else {
                return redirect()->back()->with('unsuccess', 'Unable to assign role to the user');
            }
        } else {
            return redirect()->back()->with('unsuccess', 'Unable to Update administrative user');
        }
    }


    public function deleteUser($id)
    {
        try {
            $user = Admin::findOrFail($id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('unsuccess', 'unable to find user');
        }
        if ($user->syncRoles([]) && $user->syncPermissions([]) && $user->delete()) {
            return redirect()->route('administrative.users')->with('success', 'Administrative User Updated successfully');
        } else {
            return redirect()->back()->with('unsuccess', 'Unable to delete user');
        }
    }

    public function createPermissions()
    {
        Permission::create(['guard_name' => 'admin', 'name' => 'category']);
        Permission::create(['guard_name' => 'admin', 'name' => 'topic']);
        Permission::create(['guard_name' => 'admin', 'name' => 'roles']);
        Permission::create(['guard_name' => 'admin', 'name' => 'permission']);
        Permission::create(['guard_name' => 'admin', 'name' => 'admin']);
        Permission::create(['guard_name' => 'admin', 'name' => 'post']);


        $role = Role::create(['guard_name' => 'admin', 'name' => 'Super Admin']);
        return 'success';
    }

    public function removeAllPermissions()
    {
        foreach (Permission::all() as $permission) {
            $permission->delete();
        }

        return 'success';
    }

    public function addAllPermissionForRoles()
    {
        $role = Role::first();

        foreach (Permission::all() as $key => $permission) {
            $role->givePermissionTo($permission);
        }

        return "success";
    }

}
