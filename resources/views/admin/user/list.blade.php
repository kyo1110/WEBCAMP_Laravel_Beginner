<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン機能付きタスク管理サービス 管理画面</title>
    </head>
    <body>
    @extends('admin.layout')

    {{-- メインコンテンツ --}}
    @section('contents')
        <h1>ユーザー一覧</h1>
        <table border="1">
            <tr>
                <th>ユーザーID
                <th>ユーザー名
                <th>タスク件数
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}
            <td>{{ $user->name }}
            <td>{{ $user->task_num }}
        @endforeach
        </table>
    @endsection
    </body>
</html>