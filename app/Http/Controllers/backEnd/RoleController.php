<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('backEnd.admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('backEnd.admin.roles.create');
    }

    public function store(RoleRequest $request)
    {
        $name = strtolower($request->name);
        $role = Role::create(['name' => $name]);
        return redirect()->route('admin.role.index');
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('backEnd.admin.roles.edit', compact('role'));
    }

    public function update(RoleRequest $request, $id)
    {
        $role = Role::find($id);
        $role->name = strtolower($request->name);
        $role->update();
        return redirect()->route('admin.role.index')->with("Role Update Successfully");
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route("admin.role.index")->with('Role is Delete Successfully');
    }
}
