<?php
    // var_dump($_SESSION);
    session_start();

    const PASSWORD = "GEEKJOB";
    const INPUT = 'http://localhost:8888/課題８ー４ー商品一覧.php';

    $userId = (int)$_POST['userId'];
    $pass = PASSWORD;
    $chkpass=null;
    if(empty($_POST['password'])){
        $chkpass=null;
    }else{
        $chkpass=$_POST['password'];
    }

    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
    $sql = "SELECT id FROM user1 WHERE id=$userId";
    $query = $pdo_object->prepare($sql);
    $query->execute();
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    $arr = $result[0];

 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
 <meta charset="UTF-8">
       <title></title>
 </head>
 <body>
     <h1>ログイン画面</h1>

     <?php
     if($pass!==$chkpass || $userId !== (int)$arr[id]){
         if($chkpass!==null){
             echo 'IDかパスワードが異なります。もう一度IDとパスワードを入力してください<br>';
         }else{
             echo 'IDとパスワードを入力してください<br>';
         }
         ?>
         <form action="課題８ー４ーログイン.php" method="POST">
             ID:<input type="text" name= "userId"><br>
             PASS:<input type="password" name="password"><br>
             <input type="submit" name="btnSubmit" value="ログイン">
         </form>
     <?php
     }else{
         echo 'ログインに成功しました。三秒後に移動します';
         echo '<meta http-equiv="refresh" content="3;URL='.INPUT.'">';

         $_SESSION['last_access']=mktime();
     }
     ?>
 </body>
 </html>
