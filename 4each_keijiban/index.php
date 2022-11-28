<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson02;host=localhost;", "root", "");
    $stmt = $pdo->query("select * from 4each_keijiban");
    ?>

    <header>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <div class="box_menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <div class="insertform">
                    <h3>入力フォーム</h3>
                    <form action="insert.php" method="post">
                        <div class="a">
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>
                        <div class="a">
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
                        <div class="a">
                            <label>コメント</label>
                            <br>
                            <textarea rows="7" cols="60" name="comments"></textarea>
                        </div>
                        <div class="a">
                            <input type="submit" class="submit" value="投稿する">
                        </div>

                    </form>
                </div>

                <?php

                foreach ($stmt as $row) {
                    echo "<div class='kakikomi'>";
                    echo '<p class="title">' . $row["title"] . '</p>';

                    echo '<div class="contents">' . $row["comments"] . '</div>';
                    echo "<div class='handlename'>posted by" . $row['handlename'] . "</div>";
                    echo "</div>";
                }
                ?>

                <?php

                foreach ($stmt as $row) {
                    echo "<div class='kakikomi'>";
                    echo '<p class="title">' . $row["title"] . '</p>';

                    echo '<div class="contents">' . $row["comments"] . '</div>';
                    echo "<div class='handlename'>posted by" . $row['handlename'] . "</div>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="right">
                <h2 class="article">人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ　Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h2 class="link">オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h2 class="category">カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <div class="end">
            <p>copyright©internous|4each blog which provides A to Z about programming.</p>
        </div>
    </footer>

</body>