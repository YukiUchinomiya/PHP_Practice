<?php

//仕様
// メソッドを定義してインプット引数で文字列を受け取る
// （apple or banana or melon）
// color の配列をforで回して引数で指定した値と合致したら
// 色（red or yellow or green）を returnして画面に出力

// 処理の流れ
// 1.メソッド($associative_array_definition)を引数($input)を指定して作成
// 2.引数の$inputに$color(連想配列のデータ)のkeyの値(今回の場合はmelon)を代入
// 3.for文で$colorに格納されているkeyを比較演算子で$inputで受け取っているkeyと比較
// 4.比較結果が$colorの想定しているkeyと$inputに入っているkeyが一致しているかをifで判断。
// 5.returnで一致しているvalue(今回の場合はgreen)をechoで出力

//想定している連勝配列の値をループ処理で画面に出力する処理
function associative_array_definition($input) {
    //$colorに連想配列（3つ）のデータを代入。(今回想定している値で使用する配列は'melon' => 'green')
    $color = [
        'apple' => 'red',
        'banana' => 'yellow',
        'melon' => 'green',
    ];
    //変数に想定しているkey(melon)を代入
    $input = $color['melon'];
    //引数で指定した値と一致したら戻り値でgreenを出力
    //forで$iをの初期値0を用意。。$iが＄colorに格納されている配列の数以下の場合は＄iにインクリメント
    for ($i =0; $i < count($color); $i++){
        //もし想定している$colorのkey(melon)とforで回している$inputのkeyが一致してればtrue
        if($color['melon'] == $input[$i]){
            //returnで想定しているデータを$inputに返す
            echo $input[$i];
            return $input[$i];
        }
    }
    //string(5) "green"が出力
    var_dump($input);
}
    //関数を実行
    associative_array_definition(['melon']);
?>