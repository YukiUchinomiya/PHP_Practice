<?php

// STEP1: 標準入力を受け取り、コンソールに出力してみる
echo 'STEP1 Please enter: ';
// fgets関数で標準入力された1行目を取得
$stdin = trim(fgets(STDIN));
var_dump($stdin);