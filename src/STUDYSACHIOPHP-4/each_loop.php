<?php
    //前の課題でforeach使用したので簡単に自分で考えた処理を記載。
    //復習(前の課題やる前に自分で課題登録していた)
    //配列を用意して、文字列型の価格を数値型に戻してfor
    $vegetable = array(
        'tomato' => '150円',
        'cabbage' => '100円',
        'carrots' => '200円',
    );
    //キーと値をループ処理で回してechoで出力
        foreach($vegetable as $veg => $price){
             echo "$veg は $price です" . PHP_EOL;
            }

