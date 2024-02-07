<?php

$height = '90';

if ($height === 91) {
    echo '身長は' . $height . 'cmです';
} else {
    echo '身長は' . $height . 'cmではありません'
}

$signal = 'red';

if ($signal === 'red') {
    echo 'とまれ';
} else if ($signal === 'yellow') {
    echo '一旦停止';
} else {
    echo '進む';
}

// == 一致
// === 型も一致

?>