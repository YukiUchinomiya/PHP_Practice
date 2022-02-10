<?php

// STEP5: 無限ループを利用し、常時標準入力を受け取り、受け取った値が数値の場合のみ、配列に格納してみる

while(true){
    echo 'STEP5 Please enter:';
    $array_std5 = trim(fgets(STDIN));
    if(is_numeric($array_std5)){
        $array_result[] = $array_std5;
        var_dump($array_result);
    }else{
        return;
    }
}
