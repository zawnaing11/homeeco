<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\User;

class MasterController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backEnd.admin.master.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('backEnd.admin.master.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|regex:/(0)[0-9]/',
            'role' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $request['name'] = strtolower($request->name);
        $request['email'] = strtolower($request->email);
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        $user->assignRole($request->role);
        if($user) {
            return redirect()->route('admin.masters');
        } else {
            return redirect()->back();
        }
    }
}
