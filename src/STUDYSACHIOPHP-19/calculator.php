<?php
// 逆ポーランド電卓の作成
// コマンドラインツールとして、利用できる形にする

//STEP1~12のまとめ

while(true){
    echo '数値もしくは演算子を入力してください。 ' . PHP_EOL;
    echo '= 最終結果出力, c:クリア' . PHP_EOL;
    echo ">";
    $array_std12 = trim(fgets(STDIN)) ;

    //配列に入力された数値を格納
    if(is_numeric($array_std12)){
        //スタックを準備
        $array_result[] = $array_std12;
        print_r($array_result) . PHP_EOL;
    }

//演算子が入力された場合、数値が格納された配列の数値で計算する
    switch($array_std12){
        case '=':
            echo "計算結果:" . $result . PHP_EOL;
            break;
        case '.':
            return;
            break;
        case 'c':
            $array_result = [];
            break;
        case '+':
        //配列の最初、最後の要素を取り出して足す
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array + $first_array;
        echo $result . PHP_EOL;
            break;
        case '-':
        //配列の最初、最後の要素を取り出して引く
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array - $first_array;
        echo $result . PHP_EOL;
            break;
        case '*':
        //配列の最初、最後の要素を取り出してかける
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array * $first_array;
        echo $result . PHP_EOL;
            break;
        case '/':
        //配列の最初、最後の要素を取り出して割る
        $last_array = array_pop($array_result);
        $first_array = array_shift($array_result);
        $result = $last_array / $first_array;
        echo $result . PHP_EOL;
            break;
    }
}