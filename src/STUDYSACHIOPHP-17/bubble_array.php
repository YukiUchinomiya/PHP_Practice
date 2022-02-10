<?php
// nの入力を受け取り、nの要素数を持つランダムな値が入った配列を返却する関数の作成
function array_return($input){
    //空の配列を生成
    $tmp_array = [];

    //while文で$tmp_arrayの要素数と引数の＄inputと一致しない限りループ,一致すればreturn
    while(count($tmp_array) !== $input){
        $rnd = rand(1,$input);
        if(!in_array($rnd,$tmp_array,true)){
            $tmp_array[] = $rnd;
        }
    }
    return $tmp_array;
}

//実行した関数の生成、値の確認
$result = array_return(10);
var_dump($result);

// 期待する入力
// 10
// 期待する出力
// 乱数10個

//実行結果(var_dump)
// array(10) {
//     [0]=>
//     int(7)
//     [1]=>
//     int(4)
//     [2]=>
//     int(10)
//     [3]=>
//     int(5)
//     [4]=>
//     int(9)
//     [5]=>
//     int(6)
//     [6]=>
//     int(1)
//     [7]=>
//     int(8)
//     [8]=>
//     int(3)
//     [9]=>
//     int(2)