<?php
//分かりづらいのでPHP_EOLを出力の行末に記載

// 1.変数$numに3を代入し、変数$numをechoで出力してください。
$num = 3;
echo $num . PHP_EOL;

// 2.変数$aに1を代入し、変数$bに2を代入し、$aと$bを足し算した結果を変数$cに代入し、echoで出力してください。
$a = 1;
$b = 2;
$c = $a + $b;
echo $c . PHP_EOL;

// 3. 1 + 2 * 3を計算し、変数$resultに代入し、$resultをechoで出力してください。
$result = 1 + 2 * 3;
echo $result . PHP_EOL;

// 4.「This is a pen.」という文字列を変数$msgに代入し、echoで出力してください。
$msg = "This is a pen.";
echo $msg . PHP_EOL;

// 5.変数$first_nameに「田中」、変数$last_nameに「太郎」を代入し、以下の書式となるようにechoで出力させてください。
//  1田中 太郎

$first_name = "田中";
$last_name = "太郎";

echo "$first_name $last_name" . PHP_EOL;

// 6変数$valueに10を代入し、変数$valに変数$valueの参照を渡し、$valをechoで出力しなさい。
$value = 10;
$val = $value;
echo $val . PHP_EOL;

// 7変数$hereにヒアドキュメントを利用し、改行ありの文字列を代入し、$hereをechoで出力しなさい。
$here = <<<EOM
私は焼肉が好きです。
食べたら寝ます。
EOM;
echo $here;
