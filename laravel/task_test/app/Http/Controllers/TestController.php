<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Eloquentを使ってデータ操作を行う方法
        // Testの表を全件で取得する
        // $values = Test::all();

        // $count = Test::count();

        // idが1のものを取得する
        // $first = Test::findOrFail(1);

        // $whereBBB = Test::where('text', '=', 'bbb')->get();

        // 取得してきたデータをdd（die + var_dump）で中身を確認する
        // dd($values, $count, $first, $whereBBB);

        // クエリビルダを使ってデータ操作を行う方法
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')->select('id', 'text')->get();

        dd($queryBuilder);

        // viewのtestフォルダのtest.blade.phpへ遷移する
        // compactを使うことで、その変数をviewに渡すことができる
        return view('tests.test', compact('values'));
    }
}
