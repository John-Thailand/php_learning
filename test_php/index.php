<?php

// データが入っているかどうか
// isset empty is_null

$test = '';

if(empty($test)) {
    echo '変数が空です';
}

// AND と　OR

$signal_1 = 'red';
$signal_2 = 'blue';

if ($signal_1 === 'red' && $signal_2 === 'blue') {
    echo '赤と青です';
}

// 三項演算子

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo $comment;

?>