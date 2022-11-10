<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新規作成</title>
</head>
<body>
<header>
    <div>
        <a href="/vantan_board/index.php">TOP</a>
        <a href="/vantan_board/register.php">新規作成</a>
        <a href="/vantan_board/login.php">ログイン</a>
        <a href="/vantan_board/logout.php">ログアウト</a>
    </div>
</header>
<h1>新規作成</h1>
<div>
    <form action="/vantan_board/register.php" method="post">
        <label>メールアドレス: <input type="email" name="email"/></label><br/>
        <label>パスワード: <input type="password" name="password"/></label><br/>
        <label>名前: <input type="text" name="name"/></label><br/>
        <input type="submit" value="新規登録">
    </form>   
</div>
</body>
<?php

// ドライバ呼び出しを使用して MySQL データベースに接続します
$dsn = 'mysql:dbname=shop;host=127.0.0.1';
$user = 'board';
$password = 'boardpw';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
</html>
