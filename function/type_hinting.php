<?php

// declare(strict_types=1); // 強い型指定

ini_set("display_errors", 1);
error_reporting(E_ALL);

/**
 * @param $string
 */
function noTypeHint($string) {
    var_dump($string);
}

noTypeHint(['テスト']);
echo '<br>';

// タイプひんティング（引数に型を指定。型が違うとエラー）
function typeTest(string $string) {
    var_dump($string);
}

typeTest(['配列文字']);
// 引数にstringと指定しているのに配列->こちらはエラー