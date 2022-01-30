<?php
// nの入力を受け取り、nの要素数を持つランダムな値が入った配列を返却する関数の作成
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