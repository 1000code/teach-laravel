<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class adminhomecontroller extends Controller
{


    public function Index()
    {
        try {

            // $books = Books::all();

            $books = DB::table('books')
                ->select('*')
                //     ->where(['type' => 'IT'])
                ->get();

            return view("admin.home.index", compact('books'));

            // $books = DB::table('books')
            //     ->select('*')
            //     ->join('users', 'user.id', '=', 'book.user_id')
            //     ->where(['type' => 'IT'])
            //     ->get();


        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function Form()
    {
        return view("admin.home.add");
    }

    public function Store(Request $request)
    {


        $request->validate([
            'name' => 'required | max:10 | min:2',
            'type' => 'required'
        ], [
            'name.required' => 'ກະລຸນາປ້ອນຊື່',
            'name.max' => 'ຊື່ວຫ້າມຍາວເກີນ 10 ຕົວອັກສອນ',
            'name.min' => 'ຊື່ຕ້ອງຫຼາຍກວ່າ 2 ຕົວອັກສອນ',
            'type.required' => 'ກະລຸນາປ້ອນປະເພດໜັງສື',
        ]);

        try {
            // Books::insert([
            //     'name' => $request->name,
            //     'type' => $request->type,
            //     'created_at' => Carbon::now()
            // ]);


            // $dd = new Books();

            // $dd->name = $request->name;
            // $dd->type = $request->type;
            // $dd->save();


            DB::table('books')->insert([
                'name' => $request->name,
                'type' => $request->type,
                'user_id' => Auth()->user()->id,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('book')->with('success', 'ບັນທຶກສຳເລັດ');
        } catch (\Throwable $e) {
            throw $e;
        }
    }
}
