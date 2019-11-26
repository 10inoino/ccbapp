@extends('layouts.ccbapp')

@section('title', 'Role Change')

@section('menubar')
    @parent
    権限変更ページ
@endsection

@section('content')
    <table>
        <form action="/user/role_change" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>名前</th>
                <td>{{$form->name}}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{$form->email}}</td>
            </tr>
            <tr>
                <th>ユーザーID</th>
                <td>{{$form->userid}}</td>
            </tr>
            <tr>
                <th>権限</th>
                <td>
                    <p><label><input type="radio" name="role" value=0 <?php if($form->role == 0){echo "checked";}?>>ゲスト</label></p>
                    <p><label><input type="radio" name="role" value=1 <?php if($form->role == 1){echo "checked";}?>>関係者</label></p>
                    <p><label><input type="radio" name="role" value=2 <?php if($form->role == 2){echo "checked";}?>>選手</label></p>
                    <p><label><input type="radio" name="role" value=3 <?php if($form->role == 3){echo "checked";}?>>管理者</label></p>
                </td>
            </tr>
            <tr>
                <td><a href="/user/cancel"><input type="button" value="キャンセル"></a></td>
                <td><input type="submit" value="変更"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2019 inomata
@endsection