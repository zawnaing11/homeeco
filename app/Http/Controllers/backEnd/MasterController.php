<?php

namespace App\Http\Controllers\backEnd\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    public function dashboard()
    {
        return view('backEnd.admin.master.index',compact('masters'));
    }

    public function create()
    {
        return view('backEnd.admin.master.create');
    }

    public function store()
    {

    }
}
