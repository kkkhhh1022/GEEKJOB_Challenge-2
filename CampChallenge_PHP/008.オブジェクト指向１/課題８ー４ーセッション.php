<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>セッション切れ</title>
</head>
<body>
    <?php
    if(isset($_GET['mode']) && $_GET['mode']=='timeout'){
    ?>
        <h1>セッション有効切れ</h1>
        セッション有効期限切れです。三秒後にログイン画面に移動します
    <?php
    }else{
    ?>
        <h1>不正なアクセス</h1>
        不正なアクセスです。三秒後にログイン画面に移動します
    <?php
    }
    ?>
    <meta http-equiv="refresh" content="3;URL='課題８ー４ーログイン.php'">
</body>
</html>
