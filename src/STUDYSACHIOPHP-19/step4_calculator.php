<?php

// STEP4: 無限ループを利用し、常時標準入力を受け取り、受け取った値が数値かどうかを判定し、true/falseを出力してみる。
while(true){
    echo 'STEP4 Please enter: ';
    $loop_std = trim(fgets(STDIN));
    if(is_numeric($loop_std)){
        echo "true" . PHP_EOL;
    }else{
        echo "false" . PHP_EOL;
    }
}