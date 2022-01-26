<?php
//登録されている以下のコードを作成してください。
//出力する問題はこっちのファイルに切り分け

    // 155.36を指数表記し、整数にキャストし、var_dumpで出力

    //出力した結果はint(15536000)(想定通り)
    var_dump((int)155.36E5);

    // 「りんご、みかん、かき」という要素を持つ配列$fruitを作り、var_dumpで出力
    //$fruit(配列)に格納されている果物3つを出力

    //実行結果は以下の通り(想定した値が出力)
    // array(3) {
    //     [0]=>
    //     string(9) "りんご"
    //     [1]=>
    //     string(9) "みかん"
    //     [2]=>
    //     string(6) "かき"
    //   }
    $fruit = array (
        'りんご',
        'みかん',
        'かき',
    );
    var_dump($fruit);

    // 「red / トマト」「yellow / かぼちゃ」「green / レタス」というキー / 値の組み合わせの連想配列$vegetablesを作り、var_dumpで出力
    //$vegetables(連想配列)に格納されている野菜3つを出力(キーの色が重要)

    //実行結果は以下の通り(想定した値が出力)
    // array(3) {
    //     ["red"]=>
    //     string(9) "トマト"
    //     ["yellow"]=>
    //     string(12) "かぼちゃ"
    //     ["green"]=>
    //     string(9) "レタス"
    //   }
    $vegetables = array (
        'red' => 'トマト',
        'yellow' => 'かぼちゃ',
        'green' => 'レタス',
    );
    var_dump($vegetables);

    // 改行を含んだ文字列$str（エスケープシーケンスを使用しないこと。内容は任意でよい）
    //ヒアドキュメントを変数に代入
    //実行結果(想定通り)
    //こんにちは。
    //私はジョンソンです。
    $str = <<<EOM
    こんにちは。
    私はジョンソンです。
    EOM;
    echo $str . PHP_EOL;

    // 2進数値1001101を表す変数$num
    //$numを出力結果は77(想定結果通り)
    $num = 0b1001101;
    echo $num . PHP_EOL;

    // 16進数値FFを表す変数$hex
    //$hexを出力した場合は255(想定結果通り)
    $hex = 0xFF;
    echo $hex . PHP_EOL;
