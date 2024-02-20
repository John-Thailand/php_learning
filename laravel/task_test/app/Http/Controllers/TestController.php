<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // viewのtestフォルダのtest.blade.phpへ遷移する
        return view('tests.test');
    }
}
