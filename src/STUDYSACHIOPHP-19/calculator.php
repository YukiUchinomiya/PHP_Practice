<?php
// 逆ポーランド電卓の作成
// コマンドラインツールとして、利用できる形にする
//※無限ループ処理系は基本的にコメントアウトしている
//付随しているechoぶんは各STEP毎で変更している

// STEP1: 標準入力を受け取り、コンソールに出力してみる
echo 'STEP1 Please enter: ';
// fgets関数で標準入力された1行目を取得
$stdin = trim(fgets(STDIN));
var_dump($stdin);

// // STEP2: 標準入力を受け取り、配列に格納し、コンソールに出力してみる
echo 'STEP2 Please enter: ';
$input =fgets(STDIN);
$array[] =trim($input);
var_dump($array);

// STEP3: 無限ループを利用し、常時標準入力を受け取り、それを出力してみる
//無限ループなので必要であればコメントアウトを外す
// echo 'STEP3 Please enter: ';
// $loop_std = trim(fgets(STDIN));
// while($loop_std){
//     var_dump($loop_std);
//     return;
// }

// STEP4: 無限ループを利用し、常時標準入力を受け取り、受け取った値が数値かどうかを判定し、true/falseを出力してみる。
//無限ループなので必要であればコメントアウトを外す
// echo 'STEP4 Please enter: ';
// $loop_std = trim(fgets(STDIN));
// while($loop_std){
//     if(is_numeric($loop_std)){
//         echo "true";
//     }else{
//         echo "false";
//     }
//     return;
// }

// STEP5: 無限ループを利用し、常時標準入力を受け取り、受け取った値が数値の場合のみ、配列に格納してみる
// echo 'STEP5 Please enter: ';
// $array_std5 = trim(fgets(STDIN));
// $array_result = [];
// while($array_std5){
//     if(is_numeric($array_std)){
//         $array_result = $array_std;
//         var_dump($array_result);
//     }else{
//         return;
//     }
// }

// STEP6: STEP5に加え、数値でない場合、「数値ではありません」と出力してみる
// echo 'STEP6 Please enter: ';
// $array_std6 = trim(fgets(STDIN));
// $array_result = [];
// while($array_std6){
//     if(is_numeric($array_std)){
//         $array_result = $array_std;
//         var_dump($array_result);
//     }else{
//         echo "数値ではありません";
//     }
//     return;
// }

// STEP7: STEP6を変更し、Switch文を利用して、特定の文字（'=', '.', 'c') の場合はその文字を出力してみる
// echo 'STEP7 Please enter: ';
// $array_std7 = trim(fgets(STDIN));
// switch($array_std7){
//     case '=':
//         echo '=';
//         break;
//     case '.':
//         echo '.';
//         break;
//     case 'c':
//         echo 'c';
//         break;
//     default:
//     return;
// }

// STEP8: STEP7に加え、演算子を受け取った場合の分岐を追加してみる
echo 'STEP8 Please enter: ';
$array_std8 = trim(fgets(STDIN));
switch($array_std8){
    case '=':
        echo '=';
        break;
    case '.':
        echo '.';
        break;
    case 'c':
        echo 'c';
        break;
    case '+':
        echo '+';
        break;
    case '-':
        echo '-';
        break;
    case '*':
        echo '*';
        break;
    case '/':
        echo '/';
        break;
    case '%':
        echo '%';
        break;
    case '**':
        echo '**';
        break;
    default:
    return;
}


// STEP9: STEP8に加え、受け取った演算子で逆ポーランド計算を行ってみる
// STEP10: =という文字を受け取った場合に、計算結果を出力してみる
// STEP11: .という文字を受け取った場合に、処理を終了してみる
// STEP12: cという文字を受け取った場合に、配列をクリアしてみる