<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Request\LoginPostRequest;

class AuthController extends Controller
{
    /**
     * トップページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    public function login(LoginPostRequest $request)
    {
        // validate済

        // データの取得
        $datum = $request->validated();

        //
        var_dump($datum); exit;
    }
}
