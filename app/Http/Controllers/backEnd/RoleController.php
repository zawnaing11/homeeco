<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('backEnd.admin.roles.index',compact('roles'));
    }

    public function create()
    {
        return view('backEnd.admin.roles.create');
    }

    public function store(Request $request)
    {
        $name = strtolower($request->name);
        $role = Role::create(['name' => $name]);
        return redirect()->route('admin.roles');
    }
}
