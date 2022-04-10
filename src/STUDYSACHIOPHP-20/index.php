<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>家計簿アプリ</title>
</head>
<body>
<!--ヘッダー-->
<header>
    <div class="header_content">
        <h1 class="header_text">expenses book</h1>
    </div>
</header>
    <!--項目、金額入力-->
    <main>
        <section>
            <div class="form_content">
                <h1 class="form_title">項目/金額入力</h1>
                <form action="index.php" method="POST">
                    <div class="items">
                        <label class="label">項目</label><br>
                        <input class="inputs" type="text" name="category" placeholder="category">
                    </div>
                    <div class="items">
                        <label class="label">金額</label><br>
                        <input class="inputs" type="email" name="price" placeholder="0">
                    </div>
                    <div class="items">
                        <label class="label">メモ</label><br>
                        <input class="inputs" type="email" name="note" placeholder="memo">
                    </div>
                    <input type="submit" class="form_button" value="登録">
                </form>
            </div>
        </section>
        <!--登録した最新10件を表示-->
        <section>
            <div class="result_list">
                <h1 class="result">最新の10件</h1>
                    <div class="result_title_header"></div>
                        <ul class="result_title_list">
                            <li class="result_title_detail_id">＃</li>
                            <li class="result_title_detail_item">項目</li>
                            <li class="result_title_detail_price">金額</li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">1</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">10000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">2</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">20000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">3</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">30000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">4</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">5</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">6</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">7</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">8</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">9</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
                        <ul class="result_text_list">
                            <li class="result_text_detail_id">10</li>
                            <li class="result_text_detail_item">食費</li>
                            <li class="result_text_detail_price">40000</li>
                            <li class="result_text_detail_button"><input type="submit" class="result_text_detail_button"></li>
                        </ul>
            </div>
        </section>
    </main>
<script src="js/main.js"></script>
</body>
</html>

<?php

//TODO

// if(!empty($_POST['category'])){
//     try{
//       $sql  = 'INSERT INTO items(category) VALUES(:ONAMAE)';
//       $stmt = $dbh->prepare($sql);

//       $stmt->bindParam(':ONAMAE', $_POST['category'], PDO::PARAM_STR);
//       $stmt->execute();

//       header('location: http://localhost:8888/');
//       exit();
//     } catch (PDOException $e) {
//         echo 'データベースにアクセスできません！'.$e->getMessage();
//     }
//   }