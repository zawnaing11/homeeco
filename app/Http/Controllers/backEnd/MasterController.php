<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class MasterController extends Controller
{
    public function index()
    {
        return view('backEnd.admin.master.index',compact('masters'));
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
            'phone' => 'integer',
            'role' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::create($request->all());
        if($user) {
            return redirect()->route();
        } else {
            return redirect()->back();
        }
    }
}
