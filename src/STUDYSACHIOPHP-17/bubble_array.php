<?php
// nの入力を受け取り、nの要素数を持つランダムな値が入った配列を返却する関数の作成
<<<<<<< HEAD
<<<<<<< HEAD
function array_return($input){
    //空の配列を生成
    $tmp_array = [];

    //while文で$tmp_arrayの要素数と引数の＄inputと一致しない限りループ,一致すればreturn
    while(count($tmp_array) !== $input){
        $rnd = rand(1,$input);
        if(!in_array($rnd,$tmp_array,true)){
            $tmp_array[] = $rnd;
        }
=======
function array_return ($input){
//ループ処理で$inputの数だけ繰り返し処理を行なう
    for($i = 1; $i <= $input; $i++){
        $result[] = $i;
        $rand_result = array_rand($result,1);
        //ループ処理の中では想定する値(配列が返ってくる)
        var_dump($rand_result);
>>>>>>> parent of 08ac5d6 (STUDYSACHIOPHP-17 nの入力を受け取りnの要素数を持つランダムな値が入った配列を返却)
    }
    //ここではループ処理が終わった最後の要素がvar_dumpされている
    var_dump($rand_result);
    //returnした時に配列になっていない(色々な配列のパターンを試してみたがエラーになる)
    return $rand_result;
}

//$result_funcに関数の実行結果を代入
$result_func = array_return(10);
echo $result_func;

//[]内はランダムな値による
// echo $result_func;

// nの入力を受け取り、nの要素数を持つランダムな値が入った配列を返却する関数の作成を行ってください。
// また、返却される配列は値の重複がないようにしてください。
// nの入力値は1以上、1000未満としてください。

// 期待する入力
// 10
// 期待する出力
<<<<<<< HEAD
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
//   }
=======
function array_return ($input){
//ループ処理で$inputの数だけ繰り返し処理を行なう
    for($i = 1; $i <= $input; $i++){
        $result[] = $i;
        $rand_result = array_rand($result,1);
    }
    var_dump($rand_result);
    return $rand_result;
}

//$result_funcに関数の実行結果を代入
$result_func = array_return(10);
// var_dump($result_func);
//[]内はランダムな値による
// echo $result_func;
>>>>>>> parent of 33b2217 (STUDYSACHIOPHP-17　バブルソート処理実行の準備)
=======
// 10 1 8 7 4 5 3 1 2 6
// ヒント
// 重複する値の確認は in_array 関数を利用することで行えます。
>>>>>>> parent of 08ac5d6 (STUDYSACHIOPHP-17 nの入力を受け取りnの要素数を持つランダムな値が入った配列を返却)
