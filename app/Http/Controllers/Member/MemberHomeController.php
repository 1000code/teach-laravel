<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberHomeController extends Controller
{
    public function Index()
    {
        return view('member.home.index');
    }
}
