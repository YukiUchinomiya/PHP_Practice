<?php
//TODO::作業途中
// 逆ポーランド電卓の作成
// コマンドラインツールとして、利用できる形にする

//STEP1~12のまとめ
//各ケースでテスト済み

while(true){
    echo '数値もしくは演算子を入力してください。 ' . PHP_EOL;
    echo '= 最終結果出力, c:クリア' . PHP_EOL;
    echo ">";
    $array_std12 = trim(fgets(STDIN)) ;

    //入力された値が数値であればを格納する
    if(is_numeric($array_std12)){
        //スタックを準備してpush
        $array_result[] = $array_std12;
        print_r($array_result) . PHP_EOL;
    }else{
        //数値以外が入力された場合、数値が格納された配列の数値で計算する
        switch($array_std12){
            case '=':
                echo "計算結果:" . $array_result  . PHP_EOL;
                break;
            case '.':
                return;
                break;
            case 'c':
                $array_result = [];
                break;
            case '+':
            //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
            $pop1_array = array_pop($array_result);
            $pop2_array = array_pop($array_result);
            $array_result[] = $pop2_array + $pop1_array;
            print_r($array_result) . PHP_EOL;
                break;
            case '-':
            //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
            $pop1_array = array_pop($array_result);
            $pop2_array = array_pop($array_result);
            $array_result[] = $pop2_array - $pop1_array;
            print_r($array_result) . PHP_EOL;
                break;
            case '*':
            //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
            $pop1_array = array_pop($array_result);
            $pop2_array = array_pop($array_result);
            $array_result[] = $pop2_array * $pop1_array;
            print_r($array_result) . PHP_EOL;
                break;
            case '/':
            //配列の末尾から要素を２つ取り出してその2つで計算後、計算した値を配列に返す
            $pop1_array = array_pop($array_result);
            $pop2_array = array_pop($array_result);
            //値０で割り算を行う場合配列を空にする
            if($pop1_array == 0 || $pop2_array == 0){
               $array_result = [];
               echo "配列をクリアします。" . PHP_EOL;
            }else{
                $array_result[] = $pop2_array / $pop1_array;
                print_r($array_result) . PHP_EOL;
                break;
            }
        }
    }
}
