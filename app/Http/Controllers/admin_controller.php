<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use DB;
class admin_controller extends Controller
{
    public function index()
    {
        $diffmonth= Carbon::now()->subMonths(3)->format('Y-m-d');
        $post = User::whereDate('last_login', '<', $diffmonth)->where('type_user', '0')->get();
        return view('table_user', ['post' => $post]);
    }
    public function index_all()
    {
       $post = user::where('is_verified', '1')->get();
        return view('table_all_user', ['post' => $post]);
    }
    public function index_verified()
    {
       $post = user::where('is_verified', '0')->get();
        return view('table_verified', ['post' => $post]);
    }

    public function edit($id)
    {
        DB::table('users')->where('id', $id)->update([
            'is_aktif' => '0'
        ]);

        $diffmonth= Carbon::now()->subMonths(3)->format('Y-m-d');
        $post = User::whereDate('last_login', '<', $diffmonth)->where('type_user', '0')->get();
        return view('table_user', ['post' => $post]);
    }

    public function edit_2($id)
    {
        DB::table('users')->where('id', $id)->update([
            'is_aktif' => '0'
        ]);

        $post = user::where('is_verified', '1')->get();
        return view('table_all_user', ['post' => $post]);
    }


    public function edit_verified($id)
    {
        DB::table('users')->where('id', $id)->update([
            'is_verified' => '1'
        ]);

        $post = User::where('is_verified', '0')->get();
        return view('table_verified', ['post' => $post]);
    }
    public function edit_aktif($id)
    {
        DB::table('users')->where('id', $id)->update([
            'is_aktif' => '1'
        ]);

        $diffmonth= Carbon::now()->subMonths(3)->format('Y-m-d');
        $post = User::whereDate('last_login', '<', $diffmonth)->where('type_user', '0')->get();
        return view('table_user', ['post' => $post]);
    }

    public function edit_aktif_2($id)
    {
        DB::table('users')->where('id', $id)->update([
            'is_aktif' => '1'
        ]);

        $post = user::where('is_verified', '1')->get();
        return view('table_all_user', ['post' => $post]);
    }

    public function edit_admin($id)
    {
        DB::table('users')->where('id', $id)->update([
            'type_user' => '1'
        ]);

        $post = user::where('is_verified', '1')->get();
        return view('table_all_user', ['post' => $post]);
    }

    public function edit_biasa($id)
    {
        DB::table('users')->where('id', $id)->update([
            'type_user' => '0'
        ]);

        $post = user::where('is_verified', '1')->get();
        return view('table_all_user', ['post' => $post]);
    }
}
