<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;
use App\User;

class MasterController extends Controller
{
    public function index()
    {
        $masters = User::role('master')->paginate(5);
        return view('backEnd.admin.master.index',compact('masters'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('backEnd.admin.master.create',compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        $user->assignRole($request->role);
        if($user) {
            return redirect()->route('admin.master.index');
        } else {
            return redirect()->back('admin.master.create');
        }
    }

    public function edit($id)
    {
        $master = User::with('roles')->find($id);
        $roles = Role::all();
        return view('backEnd.admin.master.edit', compact('master', 'roles'));
    }

    public function update(UserRequest $request, $id)
    {
        $master = User::find($id);
        $master->name = $request->name;
        if($master->email != $request->email) {
            $master->email = $request->email;
        }
        $master->phone = $request->phone;
        $master->password = bcrypt($request->password);
        $master->update();
        $master->syncRoles($request->role);
        return redirect()->route('admin.master.index');
    }

    public function destroy($id)
    {
        $master = User::find($id);
        $master->delete();
        return redirect()->route('admin.master.index');
    }
}
