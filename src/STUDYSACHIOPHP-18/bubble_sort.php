<?php
//受け取った配列をバブルソートし、返却する関数
//STUDYSACHIOPHP-17で作成した関数を使用して返却された配列をバブルソートする関数を作成

// 入力を受け取り、要素数を持つランダムな値が入った配列を返却する関数
function array_return($input){
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

//実行した関数の生成
$result = array_return(10);

//ここから課題18の追記部分
//条件としては隣接してる配列の値と比較して順序が逆の場合に値を入れ替える
//ブランチ追記(pushするブランチ間違えた)


//$resultの配列の値をバブルソートする
function bubble_array ($bu_array){
    //バブルソートするにはループ処理の中にループ処理(ネスト)で回す
    //要素数繰り返す
    for($i = 0; $i < count($bu_array); $i++ ){
        //要素数-1繰り返す
        for($n = 1; $n < count($bu_array); $n++){
            //ここで隣接してる要素を比較して入れ替える(swap?)

        }
    }
  //処理した値を返す
  return $bu_array;

}