<?php
    if (isset($_POST['profilesID'])) {
        $id = $_POST['profilesID'];
    }

    if (isset($id)){
         $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

         try{
             $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
             echo "接続に成功しました<br>";
         }catch(PDOException $Exception){
             die('接続に失敗しました:'.$Exception->getMessage().'<br>');
         }

         echo "-----------------------<br>";

         $sql = "DELETE FROM profiles WHERE profilesID=$id";

         $query = $pdo_object->prepare($sql);

         $query->execute();
         echo "データを削除しました<br>";

         $pdo_object = null;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>課題７−１０</title>
    </head>
    <body>
        <h2>データの削除</h2>
        <p>※数字は半角で入力してください</p>
        <form action="課題７−１０.php" method="post">
            ID<input type='text' name='profilesID' placeholder='(例)3' required>
            <input type="submit" name="search" value="追加">
        </form>
    </body>
</html>
