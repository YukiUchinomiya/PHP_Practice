<?php

// STEP3: 無限ループを利用し、常時標準入力を受け取り、それを出力してみる
while(true){
    echo 'STEP3 Please enter: ';
    $loop_std = trim(fgets(STDIN));
    var_dump($loop_std);
}