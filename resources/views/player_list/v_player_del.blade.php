@extends('layouts.ccbapp')

@section('title', 'Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <table>
        <form action="/player_list/del" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="index_num" value="{{$form->index_num}}">
            <tr>
                <th>番号</th>
                <td>{{$form->number}}</td>
            </tr>
            <tr>
                <th>名前</th>
                <td>{{$form->name}}</td>
            </tr>
            <tr>
                <th>ポジション</th>
                <td>{{$form->position}}</td>
            </tr>
            <tr>
                <th>身長</th>
                <td>{{$form->height}}</td>
            </tr>
            <tr>
                <th>所属</th>
                <td>{{$form->affiliation}}</td>
            </tr>
            <tr>
                <th>説明</th>
                <td>{{$form->info}}</td>
            </tr>
            <tr>
                <td><a href="/player_list/cancel"><input type="button" value="キャンセル"></a></td>
                <td><input type="submit" value="削除"></td>
            </tr>
        </form>
    </table>

@endsection

@section('footer')
copyright 2019 inomata
@endsection