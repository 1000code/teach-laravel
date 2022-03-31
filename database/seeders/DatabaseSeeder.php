<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Champadev',
            'role' => 'admin',
            'phone' => '2099991111',
            'password' => '12345678',
            "created_at" => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Kob',
            'role' => 'member',
            'phone' => '2099992222',
            'password' => '12345678',
            "created_at" => Carbon::now()
        ]);
    }
}
