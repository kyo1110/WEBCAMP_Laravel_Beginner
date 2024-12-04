@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contents')

        <h1>タスクの登録</h1>
            @if (session('front.task_register_success') == true)
                タスクを登録しました！！<br>
            @endif  
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
        <form action="/task/register" method="post">
            @csrf
            タスク名:<input type="text" name="name"><br>
            期限:<input type="date" name="period"><br>
            タスク詳細:<textarea name="detail"></textarea><br>
            重要度:<label><input type="radio" name="priority" value="1" @if (old('priority') == 1) checked @endif>低い</label>/
            <label><input type="radio" name="priority" value="2" @if (old('priority', 2) == 2) checked @endif>普通</label>/
            <label><input type="radio" name="priority" value="3" @if (old('priority', 3) == 3) checked @endif>高い</label><br>
            <button>タスクを登録する</button>

        </form>

        <h1>タスクの一覧(未実装)</h1>
        <a href="./top.html">CSVダウンロード(未実装)</a>
        <table border="1">
            <tr>
                <td>タスク名
                <td>期限
                <td>重要度
        @foreach ($list as $task)
            <tr>
                <td>{{ $task->name }}
                <td>{{ $task->period }}
                <td>{{ $task->getPriorityString() }}
                <td><a href="./detail.html">詳細閲覧</a>
                <td><a href="./edit.html">編集</a>
                <td><form action="./detail.html"><button>完了</button></form>
        @endforeach
            
        </table>

        <!--ページネーション-->
        {{-- {{ $list->links() }} --}}
        現在 {{ $list->currentPage() }} ページ目<br>
        @if ($list->onFirstPage() === false)
        <a href="./top.html">最初のページ</a>
        @else
            最初のページ
        @endif
        /
        @if ($list->previousPageUrl() !== null)
        <a href="{{ $list->previousPageUrl() }}">前に戻る</a>
        @else
            前に戻る
        @endif
        /
        @if ($list->nextPageUrl() !== null)
        <a href="{{ $list->nextPageUrl() }}">次に進む</a>
        @else
            次に進む
        @endif
        
        <br>
        <hr>
        <menu label="リンク">
        <a href="./index.html">ログアウト</a><br>
        </menu>

@endsection