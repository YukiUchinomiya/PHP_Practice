<?php
    //前の課題でforeach使用したので自分で考えた処理を記載。
    //復習
    //TODO:作業途中
    $vegetable = array(
        'tomato' => '150',
        'cabbage' => '100',
        'carrots' => '200',
    );

    $lowprice = array_map('intval', $vegetable);
    //キーと値をループ処理で回してechoで出力
    //各野菜の値段を50円引きで出力
    foreach($lowprice as $veg => $price){
        $price = $price - 50;
        echo "{$veg}は{$price}円です" . PHP_EOL;
    }

