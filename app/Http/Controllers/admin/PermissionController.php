<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasPermissions;

class PermissionController extends Controller
{


    public function managePermission()
    {

        $user = Auth::guard('admin')->user();

        //return $user->getAllPermissions();
        $role = Role::first();

        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('roles', 'permissions'));
    }


    public function assignPermission($permissionId, $roleId)
    {
        $permission = Permission::findById($permissionId, $guardName = "admin");
        $role = Role::findById($roleId, $guardName = "admin");

        if ($role->hasPermissionTo($permission)) {
            return 'F';
        } else {
            $role->givePermissionTo($permission);
            return 'S';
        }
    }

    public function removePermission($permissionId, $roleId)
    {
        $permission = Permission::findById($permissionId, $guardName = "admin");
        $role = Role::findById($roleId, $guardName = "admin");
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return 'S';
        } else {
            return 'F';
        }
    }
}
