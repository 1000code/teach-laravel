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

    public function Update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required|numeric',
                'role' => 'required',
                'status' => 'required',
                'slug' => 'required',
            ],
            [
                'slug.required' => 'ບໍ່ພົບຂໍ້ມູນອ້າງອີງ',
                'name.required' => 'ກະລຸນາປ້ອນຊື່',
                'phone.required' => 'ກະລຸນາ ໝາຍເລກໂທລະສັບ',
                'phone.numeric' => 'ຕ້ອງໃສ່ເປັນຕົວເລກເທົ່ານັ້ນ',
                // 'phone.max' => ' ໝາຍເລກໂທລະສັບ ຍາວເກີນໄປ',
                // 'phone.min' => ' ໝາຍເລກໂທລະສັບ ຍັງບໍ່ຄົບ',
                'role.required' => 'ກະລຸນາ ເລືອກສິດການໃຊ້ງານ',
                'status.required' => 'ກະລຸນາ ເລືອກ ສະຖານະ',
            ]
        );

        User::find($request->slug)->update([
            'name' => trim($request->name),
            'phone' => trim($request->phone),
            'role' => trim($request->role),
            'status' => trim($request->status),
        ]);

        return redirect()->route('admin.role')->with('status', 'ອັບເດດຂໍ້ມູນສຳເລັດ');
    }

    public function Remove(Request $request)
    {
        $id = $request->id;

        if ($id) {
            User::find($id)->delete();

            return back()->with('success', 'ຂໍ້ມູນຖືກລົບ ສຳເລັດ ແລ້ວ');
        } else {
            return back()->with('error', 'ລົບຂໍ້ມູນບໍ່ສຳເລັດ');
        }
    }


    public function RemoveAjax(Request $request)
    {
        $id = $request->id;

        if ($id) {
            User::find($id)->delete();

            $status = 'success|ຂໍ້ມູນຖືກລົບ ສຳເລັດ ແລ້ວ';
            return response()->json($status);
        } else {
            $status = 'error|ລົບຂໍ້ມູນບໍ່ສຳເລັດ';
            return response()->json($status);
        }
    }
}
