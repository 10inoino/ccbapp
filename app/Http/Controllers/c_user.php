<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;

class c_user extends Controller
{
    public function user_list(Request $request)
    {
        $items = DB::table('users')
        ->select('id','name','email','userid','role')
        ->orderBy('id', 'asc')
        ->get();

        foreach ($items as $item){
            switch ($item->role){
                case 1:
                    $item->role = '関係者';
                    break;
                case 2:
                    $item->role = '選手';
                    break;
                case 3:
                    $item->role = '管理者';
                    break;
                default:
                    $item->role = 'ゲスト';   
            }

            if (empty($item->email)){
                $item->email = '登録無し';
            }
        }

        $param = ['items' => $items];
        return view('user.v_user_list',$param);
    }

    public function detail(Request $request)
    {
        $item = DB::table('users')
        ->select('id','name','email','userid','role')
        ->where('id', $request->id)
        ->first();

        if (empty($item->email)){
            $item->email = '登録無し';
        }

        return view('user.v_user_role_change',['form' => $item]);
    }

    public function role_change(Request $request)
    {
        $param = [
            'role' => $request->role,
        ];
        DB::table('users')
            ->where('id', $request->id)
            ->update($param);

        return redirect('/user/user_manage');
    }

    public function cancel()
    {
        return redirect('/user/user_manage');
    }

}
