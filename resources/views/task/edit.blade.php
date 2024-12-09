@extends('layout')

{{-- タイトル --}}
@section('title')(編集画面)@endsection

{{-- メインコンテンツ --}}
@section('contents')

        <h1>タスクの登録</h1>
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            <form action="{{ route('edit_save', ['task_id' => $task->id]) }}" method="post">
            @csrf
            @method("PUT")
            タスク名:<input name="name" value="{{ old('name') ?? $task->name }}"><br>
            期限:<input name="period" value="{{ old('period') ??  $task->name }}"><br>
            タスク詳細:<textarea name="detail">{{ old('detail') ?? $task->name }}</textarea><br>
            重要度:<label><input type="radio" name="priority" value="1" @if ((old('priority') ?? $task->priority) == 1) checked @endif>低い</label>/
            <label><input type="radio" name="priority" value="2" @if ((old('priority') ?? $task->priority) == 2) checked @endif>普通</label>/
            <label><input type="radio" name="priority" value="3" @if ((old('priority') ?? $task->priority) == 3) checked @endif>高い</label><br>
            <button>タスクを編集する</button>

        </form>

    
        <hr>
        <menu label="リンク">
        <a href="./index.html">ログアウト</a><br>
        </menu>

@endsection