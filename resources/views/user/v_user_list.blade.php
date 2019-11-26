<html>
    <head>
        <title>User List</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/text_style.css">
        <script src="/js/jquery-3.4.1.min.js"></script>
    </head>

    <body>
        <h1>User List</h1>
        <h2 class="menutitle">ユーザー一覧</h2>
        <hr size="1">
        <div class="content">
            <a href="/player_list" class="normal_view"><input type="button" value="戻る"></a>
            <table>
                <tr>
                    <th>Name 名前</th>
                    <th>E-mail メールアドレス</th>
                    <th>User ID ユーザーID</th>
                    <th>Role 権限</th>
                    <th class="role_change"></th>
                </tr>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->userid}}</td>
                        <td>{{$item->role}}</td>
                        <td class="role_change"><a href="/user/role_change?id={{$item->id}}">権限変更</a></td>
                @endforeach
            </table>
        </div>
        <div class="footer">
        copyright 2019 inomata
        </div>
    </body>
</html>
