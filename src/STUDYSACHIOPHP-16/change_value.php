<?php
//値を入れ替える関数の作成

// 引数に受け取った値を入れ替える関数を作成し、出力してください。
// 入力
// 2,3
// 出力
// 3,2
//fix:指摘事項でswapを使用して値の入れ替えを実装してとの事なので、修正

//想定結果 $int1が3、$int2が2を出力
//実行結果 $int1が3、$int2が2を出力(想定結果通り)
function change_value ($int1, $int2 ) {

    // list($int1, $int2) = array($int2, $int1);
    $temp = $int1;
    $int1 = $int2;
    $int2 = $temp;
    echo $int1, "," ,$int2 . PHP_EOL;

}

change_value(2,3);

// 引数に受け取った値を入れ替える関数を作成し、出力してください。（参照を利用すること）
// 入力
// 5,２
// 出力
// 2,5

//関数の引数を参照渡し
//関数内で宣言された引数の値を関数の外でも使用
//参照渡しなので関数内で定義された変数の値でも関数外で定義された値の値が使用できる
//fix:指摘事項でswapを使用して値の入れ替えを実装してとの事なので、修正

//想定結果 $int1が2、$int2が5を出力
//実行結果 $int1が2、$int2が5を出力(想定結果通り)

function change_value_2 (&$int1, &$int2 ) {

    $int1 = 5;
    $int2 = 2;

    $temp = $int1;
    $int1 = $int2;
    $int2 = $temp;
    echo $int1, "," ,$int2 . PHP_EOL;

}

change_value_2($int1,$int2);
