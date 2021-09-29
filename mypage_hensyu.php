<?php
mb_internal_encoding("utf8");

//mypage.phpからの同線以外は、『login_error.php』ヘリダイレクト
if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

//セッションスタート
session_start();

?>

<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="login.php">ログアウト</a></div>
        </header>
        <main>
            <div class="box">
                <div class="contents">
                    <h2>会員情報</h2>
                    <div class="hello">
                        <?php echo "こんにちは！".$_SESSION['name']."さん";?>
                    </div>
                    <br>
                    <form action="mypage_update.php" method="post">
                        <div class="profile_pic">
                            <img src="<?php echo $_SESSION['picture']; ?>">
                        </div>
                        <div class="basic_info">
                            <p>氏名；<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
                            <p>メール；<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
                            <p>パスワード；<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
                        <br>
                        <div class="comments">
                            <textarea rows="4" cols="90" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                        </div>
                        <br>
                        <div class="henshu">
                            <input type="submit" class="submit_button" value="この内容に変更する">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>
