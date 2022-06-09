<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php

        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
        $stmt = $pdo -> query("select * from 4each_keijiban");

        ?>

        <img src="4eachblog_logo.jpg" class="logo">

        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <main>
            <div class="main">
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>

                    <form method="post" action="insert.php">
                        <div>
                            <h3>入力フォーム</h3>
                        </div>

                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>

                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>

                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="60" rows="5" name="comments"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>

                    <?php

                    while($row = $stmt -> fetch()){
                        echo "<div class='kiji'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<p>".$row['comments']."</p>";
                        echo "<small>posted by ".$row['handlename']."</small>";
                        echo "</div>";
                    }

                    ?>
                </div>

                <div class="right">
                    <h3>人気の記事</h3>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLの基礎</li>

                    <h3>オススメリンク</h3>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>

                    <h3>カテゴリ</h3>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </div>
            </div>
        </main>

        <footer>
            copyright internous | 4each blog is the one which provides A to Z about programming.
        </footer>
    </body>
</html>