<?php

// STEP6: STEP5に加え、数値でない場合、「数値ではありません」と出力してみる

while(true){
    echo 'STEP6 Please enter:';
    $array_std6 = trim(fgets(STDIN));
    if(is_numeric($array_std6)){
        $array_result[] = $array_std6;
        var_dump($array_result);
    }else{
        echo "数値ではありません";
        return;
    }
}