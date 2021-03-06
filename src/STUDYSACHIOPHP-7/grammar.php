<?php
//@link
//このファイルは基本文法の確認の問題を中島さんに登録していただいた課題になります。
//基本的に内容は問題形式なので文章が多い。

//1.PHPで利用可能なデータ型を3つ以上挙げてください。
//回答
//int   整数型
//string    文字列型
//array     配列型
//object    オブジェクト型

//2.文字列をシングルクオートでくくった場合、ダブルクオートでくくった場合の違いを説明してください。
//回答
//シングルクォーテーションの場合　 ＝ 変数など文字列をそのままで表示する。文字列を関数で置換する文字列を囲む場合などにも使用
//例　 $str = 1;
//echo 'これは$strです';
//出力結果 これは$strです($strも文字列)

//ダブルクォーテーションの場合  ＝  ダブルクォーテーションで囲った変数はその変数に代入されているデータが表示できる
//文字列の中で変数展開する場合は変数を{}で括る
// $a = 1;
// echo "これは{$a}です";

//3.以下のコードで誤っている箇所が3つあります。全て挙げてください。
// <%php
// $1a = 1
// print $1a;
// %>

//回答
//1.<%php~%>と書いてるが正しい書き方は<?php~ ?　>が正しい
//2. 変数名の先頭に数字が含まれた変数名が宣言されている
//3. 変数宣言の行末に;が足りない

//4.以下はPHPにおける変数の例です。文法上の誤りがあるため、指摘してください。誤りのないものも挙げてください。
// 1. $10   //× 変数名の先頭に数字が入ってる
// 2. book  //× $が入ってない
// 3. $XYZ  //○
// 4. $msg-1 // × 変数名にハイフンが使用されている
// 5. $for  // △ 出力はできるが推奨ではない

//5.次のコードの？箇所を埋めてください
//以下のコードは、定数を使って値引き10%を定義し、下の値である500円の支払額を求めるコードです。
// ? DISCOUNT = 0.9;
// ? = 500;
// $sum = $price * ?;
// ? "値引き後の価格は?円です。";

// const DISCOUNT = 0.9;
// $price = 500;
// $sum = $price * DISCOUNT;
// echo "値引き後の価格は{$sum}円です。";

    /**
     * 複数コメント
     */
