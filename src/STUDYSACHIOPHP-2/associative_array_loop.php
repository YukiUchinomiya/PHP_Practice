<?php

//仕様
// メソッドを定義してインプット引数で文字列を受け取る
// （apple or banana or melon）
// color の配列をforで回して引数で指定した値と合致したら
// 色（red or yellow or green）を returnして画面に出力

// 処理の流れ
// 1.メソッド($array_loop)を引数($input)を指定して作成
// 2.定数COLORSに連想配列を宣言
// 3.foreachでCOLORSをループ処理で行い、もし関数の引数の$inputの文字列とCOLORSのキーの値の文字列が一致していれば条件に沿ったkeyの＄valueを返す
// 4.引数にkeyと一致する文字列を渡した関数を変数に代入して、その変数をechoで画面に出力

//想定している連想配列の値をループ処理で画面に出力する処理
function associative_array_loop($input) {
    //定数のCOLORSに連想配列（3つ）のデータを代入
    define("COLORS", array(
        'apple'=>'red',
        'banana'=>'yellow',
        'melon'=>'green',
      ));

      foreach(COLORS as $key => $value){
        if($input === $key){
            return $value;
        }
    }
}
//関数の外
    $loopecho = associative_array_loop('melon');
    echo $loopecho;

//関数実行した際(テスト)の引数パターン
//appleで実行した場合、redが出力
//bananaで実行した場合、yellowが出力
//melonで実行した場合、greenが出力
//grep(連想配列に定義されていない値)で実行した場合、何も出力されない

?>