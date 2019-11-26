@extends('layouts.ccbapp')

@section('title', 'Detail')

@section('menubar')
    @parent
    選手詳細ページ
@endsection

@section('content')
    <table>
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
            <td><pre>{{$form->info}}</pre></td>
        </tr>
        <tr>
            <th></th>
            <td><a href="/player_list/cancel"><input type="button" value="選手一覧に戻る"></a></td>
        </tr>
    </table>

@endsection

@section('footer')
copyright 2019 inomata
@endsection