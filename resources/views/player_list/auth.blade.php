@extends('layouts.ccbapp')

@section('title', 'Add')

@section('menubar')
    @parent
    認証ページ
@endsection

@section('content')
    <p>{{$message}}</p>
    <table>
        <form action="/player_list/auth" method="post">
            {{ csrf_field() }}
            <tr>
                <th>User ID: </th>
                <td><input type="text" name="userid" value="{{old('userid')}}"></td>
            </tr>
            <tr>
                <th>pass: </th>
                <td><input type="text" name="password" value="{{old('password')}}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="login"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2019 inomata
@endsection