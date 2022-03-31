<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|max:10|min:10',
            'password' => 'required',
        ], [
            'phone.required' => 'ກະລຸນາປ້ອນ ໝາຍເລກໂທລະສັບ',
            'phone.max' => 'ໝາຍເລກໂທລະສັບບໍ່ຖືກ',
            'phone.min' => 'ໝາຍເລກໂທລະສັບບໍ່ຖືກ',
            'password.required' => 'ກະລຸນາປ້ອນລະຫັດຜ່ານ',
        ]);

        if (auth()->attempt(array('phone' => $request['phone'], 'password' => $request['password']))) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('member.home');
            }
        } else {
            return redirect()->route('login')->with('error', "ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ");
        }
    }
}
