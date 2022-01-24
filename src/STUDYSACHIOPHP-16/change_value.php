<?php
//値を入れ替える関数の作成

// 引数に受け取った値を入れ替える関数を作成し、出力してください。
// 入力
// 2,3
// 出力
// 3,2
function change_value ($int1, $int2 ) {

    list($int1, $int2) = array($int2, $int1);
    echo $int1, "," ,$int2 . PHP_EOL;

}

change_value(2,3);

//TODO: 作業途中
// 引数に受け取った値を入れ替える関数を作成し、出力してください。（参照を利用すること）
// 入力
// 5,２
// 出力
// 2,5

function change_value_2 ($int1, $int2 ) {

    list($int1, $int2) = array($int2, $int1);
    echo $int1, "," ,$int2 . PHP_EOL;

}

change_value_2(5,2);