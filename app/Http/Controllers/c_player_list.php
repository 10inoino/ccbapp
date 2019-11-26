<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\form_request;
use Validator;
use Illuminate\Support\Facades\Auth;

class c_player_list extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')
            ->select('index_num','number','name','height','affiliation','pg_flg','sg_flg','sf_flg','pf_flg','c_flg','delete_flg')
            ->get();
        foreach ($items as $item){
            if ($item->pg_flg == 1) {
                $item->position = 'PG';
            }
            if ($item->sg_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'SG';
                } else {
                    $item->position = "$item->position"."/SG";
                }
            }
            if ($item->sf_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'SF';
                } else {
                    $item->position = "$item->position"."/SF";
                }
            }
            if ($item->pf_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'PF';
                } else {
                    $item->position = "$item->position"."/PF";
                }
            }
            if ($item->c_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'C';
                } else {
                    $item->position = "$item->position"."/C";
                }
            }
            if (empty($item->position)) {
                $item->position = '無し';
            }
        }
        $user = Auth::user();
        $param = ['items' => $items, 'user' => $user];
        return view('player_list.v_player_list',$param);
    }

    public function all(Request $request)
    {
        $items = DB::table('people')
            ->select('index_num','number','name','height','affiliation','pg_flg','sg_flg','sf_flg','pf_flg','c_flg','delete_flg')
            ->get();
        foreach ($items as $item){
            if ($item->pg_flg == 1) {
                $item->position = 'PG';
            }
            if ($item->sg_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'SG';
                } else {
                    $item->position = "$item->position"."/SG";
                }
            }
            if ($item->sf_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'SF';
                } else {
                    $item->position = "$item->position"."/SF";
                }
            }
            if ($item->pf_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'PF';
                } else {
                    $item->position = "$item->position"."/PF";
                }
            }
            if ($item->c_flg == 1) {
                if (empty($item->position)) {
                    $item->position = 'C';
                } else {
                    $item->position = "$item->position"."/C";
                }
            }
            if (empty($item->position)) {
                $item->position = '無し';
            }
        }
        $user = Auth::user();
        $param = ['items' => $items, 'user' => $user];
        return view('player_list.v_player_list',$param);
    }

    public function edit(Request $request)
    {
        $item = DB::table('people')
            ->select('index_num','number','name','height','affiliation','info','pg_flg','sg_flg','sf_flg','pf_flg','c_flg')
            ->where('index_num', $request->num)
            ->first();
        
        // バリデーションに引っかかってリダイレクトしてきたときの処理
        if (!empty(old('number'))) {
            $item->number = old('number');
        }
        if (!empty(old('name'))) {
            $item->name = old('name');
        }
        if (!empty(old('position'))) {
            $item->position = old('position');
        }
        if (!empty(old('height'))) {
            $item->height = old('height');
        }
        if (!empty(old('affiliation'))) {
            $item->affiliation = old('affiliation');
        }
        if (!empty(old('info'))) {
            $item->info = old('info');
        }
        if (!empty(old('pg_flg'))) {
            $item->pg_flg = old('pg_flg');
        }
        if (!empty(old('sg_flg'))) {
            $item->sg_flg = old('sg_flg');
        }
        if (!empty(old('sf_flg'))) {
            $item->sg_flg = old('sf_flg');
        }
        if (!empty(old('pf_flg'))) {
            $item->pf_flg = old('pf_flg');
        }
        if (!empty(old('c_flg'))) {
            $item->c_flg = old('c_flg');
        }

        return view('player_list.v_player_edit',['form' => $item]);
    }

    public function update(Request $request)
    {
        // ポジションのチェックボックスにチェックが入っていないときの処理
        if (empty($request->pg_flg)) {
            $request->pg_flg = 0;
        }

        if (empty($request->sg_flg)) {
            $request->sg_flg = 0;
        }

        if (empty($request->sf_flg)) {
            $request->sf_flg = 0;
        }

        if (empty($request->pf_flg)) {
            $request->pf_flg = 0;
        }

        if (empty($request->c_flg)) {
            $request->c_flg = 0;
        }

        $validator = $this->original_validate($request->all());

        if ($validator->fails()) {
            return redirect("player_list/edit?num=$request->index_num")->withErrors($validator)->withInput();
        }
        $param = [
            'number' => $request->number,
            'name' => $request->name,
            'position' => $request->position,
            'height' => $request->height,
            'affiliation' => $request->affiliation,
            'info' => $request->info,
            'pg_flg' => $request->pg_flg,
            'sg_flg' => $request->sg_flg,
            'sf_flg' => $request->sf_flg,
            'pf_flg' => $request->pf_flg,
            'c_flg' => $request->c_flg,
        ];
        DB::table('people')
            ->where('index_num', $request->index_num)
            ->update($param);
        return redirect('/player_list'); 
    }

    public function del(Request $request)
    {
        $item = DB::table('people')
        ->select('index_num','number','name','height','affiliation','info','pg_flg','sg_flg','sf_flg','pf_flg','c_flg')
        ->where('index_num', $request->num)->first();
        if ($item->pg_flg == 1) {
            $item->position = 'PG';
        }
        if ($item->sg_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'SG';
            } else {
                $item->position = "$item->position"."/SG";
            }
        }
        if ($item->sf_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'SF';
            } else {
                $item->position = "$item->position"."/SF";
            }
        }
        if ($item->pf_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'PF';
            } else {
                $item->position = "$item->position"."/PF";
            }
        }
        if ($item->c_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'C';
            } else {
                $item->position = "$item->position"."/C";
            }
        }
        if (empty($item->position)) {
            $item->position = '無し';
        }        
        return view('player_list.v_player_del',['form' => $item]);
    }

    public function remove(Request $request)
    {
        $param = [
            'delete_flg' => 1,
        ];
        DB::table('people')
            ->where('index_num', $request->index_num)
            ->update($param);
        return redirect('/player_list');
    }

    public function cancel()
    {
        return redirect('/player_list');
    }

    public function add()
    {
        return view('player_list.v_player_add');
    }

    public function create(Request $request)
    {
        // ポジションのチェックボックスにチェックが入っていないときの処理
        if (empty($request->pg_flg)) {
            $request->pg_flg = 0;
        }

        if (empty($request->sg_flg)) {
            $request->sg_flg = 0;
        }

        if (empty($request->sf_flg)) {
            $request->sf_flg = 0;
        }

        if (empty($request->pf_flg)) {
            $request->pf_flg = 0;
        }

        if (empty($request->c_flg)) {
            $request->c_flg = 0;
        }

        $validator = $this->original_validate($request->all());

        if ($validator->fails()) {
            return redirect("player_list/add")->withErrors($validator)->withInput();
        }

        $param = [
            'number' => $request->number,
            'name' => $request->name,
            'height' => $request->height,
            'affiliation' => $request->affiliation,
            'info' => $request->info,
            'pg_flg' => $request->pg_flg,
            'sg_flg' => $request->sg_flg,
            'sf_flg' => $request->sf_flg,
            'pf_flg' => $request->pf_flg,
            'c_flg' => $request->c_flg,
        ];
        DB::table('people')->insert($param);
        return redirect('/player_list'); 
    }

    public function detail(Request $request)
    {
        $item = DB::table('people')
        ->select('index_num','number','name','height','affiliation','info','pg_flg','sg_flg','sf_flg','pf_flg','c_flg')
        ->where('index_num', $request->num)->first();
        if ($item->pg_flg == 1) {
            $item->position = 'PG';
        }
        if ($item->sg_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'SG';
            } else {
                $item->position = "$item->position"."/SG";
            }
        }
        if ($item->sf_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'SF';
            } else {
                $item->position = "$item->position"."/SF";
            }
        }
        if ($item->pf_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'PF';
            } else {
                $item->position = "$item->position"."/PF";
            }
        }
        if ($item->c_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'C';
            } else {
                $item->position = "$item->position"."/C";
            }
        }
        if (empty($item->position)) {
            $item->position = '無し';
        }        
        return view('player_list.v_player_detail',['form' => $item]);
    }

    public function original_validate(array $data)
    {
        // バリデーションルール
        $rules = [
            'number' => 'required|numeric|between:0,99',
            'name' => 'required',
            'height' => 'required|numeric|between:120,250',
            'affiliation' => 'required',
            'info' => 'required',
        ];

        // バリデーションに引っかかったときのメッセージ
        $messages = [
            'number.required' => '背番号は必ず入力して下さい',
            'number.between' => '背番号は0~99の間で入力して下さい',
            'name.required' => '名前は必ず入力して下さい',
            'height.required' => '身長は必ず入力して下さい',
            'height.between' => '身長おかしくない？笑',
            'affiliation.required' => '所属は必ず入力して下さい',
            'info.required' => '説明は必ず入力してください',
        ];

        return Validator::make($data, $rules, $messages);
    }

    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください。'];
        return view('player_list.auth',$param);
    }

    public function postAuth(Request $request)
    {
        $userid = $request->userid;
        $password = $request->password;
        if (Auth::attempt(['userid' => $userid, 'password' => $password])) {
            return $this->index($request);
        } else {
            $msg = 'ログインに失敗しました。';
            return view('auth.login',['message' => $msg]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $msg = 'ログアウトしました。';
        return view('auth.login',['message' => $msg]);
    }

    public function back(Request $request)
    {
        $item = DB::table('people')
        ->select('index_num','number','name','height','affiliation','info','pg_flg','sg_flg','sf_flg','pf_flg','c_flg')
        ->where('index_num', $request->num)->first();
        if ($item->pg_flg == 1) {
            $item->position = 'PG';
        }
        if ($item->sg_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'SG';
            } else {
                $item->position = "$item->position"."/SG";
            }
        }
        if ($item->sf_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'SF';
            } else {
                $item->position = "$item->position"."/SF";
            }
        }
        if ($item->pf_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'PF';
            } else {
                $item->position = "$item->position"."/PF";
            }
        }
        if ($item->c_flg == 1) {
            if (empty($item->position)) {
                $item->position = 'C';
            } else {
                $item->position = "$item->position"."/C";
            }
        }
        if (empty($item->position)) {
            $item->position = '無し';
        }        
        return view('player_list.v_player_back',['form' => $item]);
    }

    public function reverse(Request $request)
    {
        $param = [
            'delete_flg' => 0,
        ];
        DB::table('people')
            ->where('index_num', $request->index_num)
            ->update($param);
        return redirect('/player_list');
    }

}
