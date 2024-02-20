<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        // Testの表を全件で取得する
        $values = Test::all();

        // 取得してきたデータをdd（die + var_dump）で中身を確認する
        // dd($values);

        // viewのtestフォルダのtest.blade.phpへ遷移する
        // compactを使うことで、その変数をviewに渡すことができる
        return view('tests.test', compact('values'));
    }
}
