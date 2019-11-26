@extends('layouts.ccbapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <form action="/player_list/edit" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="index_num" value="{{$form->index_num}}">
            <tr>
                <th>番号</th>
                <td><input type="number" name="number" value="{{$form->number}}"></td>
            </tr>
            <tr>
                <th>名前</th>
                <td><input type="text" name="name" value="{{$form->name}}"></td>
            </tr>
            <tr>
                <th>ポジション</th>
                <td>
                    <input type="checkbox" name="pg_flg" value=1 <?php if($form->pg_flg){echo "checked";}?>>PG
                    <input type="checkbox" name="sg_flg" value=1 <?php if($form->sg_flg){echo "checked";}?>>SG
                    <input type="checkbox" name="sf_flg" value=1 <?php if($form->sf_flg){echo "checked";}?>>SF
                    <input type="checkbox" name="pf_flg" value=1 <?php if($form->pf_flg){echo "checked";}?>>PF
                    <input type="checkbox" name="c_flg" value=1 <?php if($form->c_flg){echo "checked";}?>>C
                </td>
            </tr>
            <tr>
                <th>身長</th>
                <td><input type="number" name="height" value="{{$form->height}}"></td>
            </tr>
            <tr>
                <th>所属</th>
                <td><input type="text" name="affiliation" value="{{$form->affiliation}}"></td>
            </tr>
            <tr>
                <th>説明</th>
                <td><textarea name="info" cols=100 rows=5>{{$form->info}}</textarea></td>
            </tr>
            <tr>
                <td><a href="/player_list/cancel"><input type="button" value="キャンセル"></a></td>
                <td><input type="submit" value="編集"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2019 inomata
@endsection