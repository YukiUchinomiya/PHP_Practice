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
                <form action="detail.php" method="post">
                    <div class="items">
                        <label class="label">項目</label>
                        <input class="inputs" type="text" name="name">
                    </div>
                    <div class="items">
                        <label class="label">金額</label>
                        <input class="inputs" type="email" name="email">
                    </div>
                    <div class="items">
                        <label class="label">メモ</label>
                        <input class="inputs" type="email" name="email">
                    </div>
                </form>
            </div>
        </section>
<!--登録した最新10件を表示-->
        <section>
        </section>
    </main>
<script src="js/main.js"></script>
</body>
</html>