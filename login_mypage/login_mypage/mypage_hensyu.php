<?php
mb_internal_encoding("utf8");
session_start();

if (empty($_POST['form_mypage'])) {
    header("Location:mypage.php");
}

?>



<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="log_out.php">ログアウト</a></div>
    </header>

    <div class="form">

        <h1>会員情報</h1>
        <div class="contents">
            <p>
                <?php echo
                "こんにちは！" . $_SESSION['name'] . "さん。"; ?>
            </p>
            <div class="plofilePicture">
                <img src="<?php echo $_SESSION['picture']; ?>">
            </div>
            <form action="mypage_update.php" method="post">
                <p>氏名:
                    <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['name']; ?>" name="name">
                </p>
                <p>メールアドレス:
                    <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['mail']; ?>" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </p>
                <p>パスワード:
                    <input type="text" class="formbox" size="40" value="<?php echo $_SESSION['password']; ?>" name="password" id="password" pattern="^[a-z0-9]{6,}$">
                </p>
                <p>コメント:
                    <textarea rows="5" cols="45" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </p>
                <div class="hensyuu">
                    <input type="submit" class="submit_button" size="35" value="編集する">
                </div>
            </form>
        </div>


    </div>
    <footer>
        © 2018 InterNous.inc. All right reserved
    </footer>
</body>

</html>