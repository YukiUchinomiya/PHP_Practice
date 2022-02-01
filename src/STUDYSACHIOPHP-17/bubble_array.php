<?php
// nの入力を受け取り、nの要素数を持つランダムな値が入った配列を返却する関数の作成
function array_return ($input){
//ループ処理で$inputの数だけ繰り返し処理を行なう
    for($i = 1; $i <= $input; $i++){
        $result[] = $i;
        $rand_result = array_rand($result,1);
        //ループ処理の中では想定する値(配列が返ってくる)
        var_dump($rand_result);
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
// 10 1 8 7 4 5 3 1 2 6
// ヒント
// 重複する値の確認は in_array 関数を利用することで行えます。