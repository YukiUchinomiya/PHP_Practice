<?php
// 逆ポーランド電卓の作成
// コマンドラインツールとして、利用できる形にする

//STEP1~12のまとめ
//各ケースでテスト済み

while(true){
    echo '数値もしくは演算子を入力してください。 ' . PHP_EOL;
    echo '= 最終結果出力, c:クリア, .:終了' . PHP_EOL;
    echo "> ";

    $standard_in = trim(fgets(STDIN)) ;

    //入力された値が数値であればを格納する
    if(is_numeric($standard_in)){
        //スタックを準備してpush
        $standard_in = intval($standard_in);
        $stack[] = $standard_in;
    }else{
        //数値以外が入力された場合、数値が格納された配列の数値で計算する
        switch($standard_in){
            case '=':
                if(count($stack) == 1){
                    echo "計算結果：";
                    $result = implode($stack);
                    echo $result . PHP_EOL;
                    break;
                }else{
                    echo "計算途中です。" . PHP_EOL;
                    break;
                }
            case '.':
                return;
                break;
            case 'c':
                $stack = [];
                break;
            case '+':
                //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
                $a = array_pop($stack);
                $b = array_pop($stack);
                $stack[] = $b + $a;
                break;
            case '-':
                //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
                $a = array_pop($stack);
                $b = array_pop($stack);
                $stack[] = $b - $a;
                break;
            case '*':
                //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
                $a = array_pop($stack);
                $b = array_pop($stack);
                $stack[] = $b * $a;
                break;
            case '/':
                //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
                $a = array_pop($stack);
                $b = array_pop($stack);
                //値０で割り算を行う場合配列を空にする
                if($a == 0){
                    $stack = [];
                    echo "配列をクリアします。" . PHP_EOL;
                }else{
                    $stack[] = $b / $a;
                break;
                }
        }
    }
    $content = implode(',' , $stack);
    echo '[' . $content . ']' . PHP_EOL;
}

