<?php
// 実行中のファイル名と、行番号を出力してください。
// ※ベタ書きしないこと。
// 書式は以下の形とする。

//マジック定数のFILEとLINEを使用して使用されているファイル名、行番号を取得
//DIR,FUNCTIONもよく使用する印象
echo "実行中のファイル名:", __FILE__ , PHP_EOL ;
echo "実行中の行番号:", __LINE__, PHP_EOL;