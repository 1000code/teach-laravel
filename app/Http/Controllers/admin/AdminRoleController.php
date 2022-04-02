<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function Index()
    {
        $users = User::all();
        return view('admin.role.index', compact('users'));
    }

    public function FormUpdate(Request $request)
    {
        $user = User::find($request->slug);
        return view('admin.role.update', compact('user'));
    }
}
