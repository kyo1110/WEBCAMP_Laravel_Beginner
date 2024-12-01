<?php

declare(strict_type=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        //一覧の取得
        $list = TaskModel::where('user_id',Auth::id())->get();
        $sql = TaskModel::where('user_id',Auth::id())>toSql();
        echo "<pre>\n"; var_dump($sql, $list); exit;
        return view('task.list');
    }
}
