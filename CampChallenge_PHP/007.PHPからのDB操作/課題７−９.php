<?php
    if (isset($_POST['profilesID'])) {
        $id = $_POST['profilesID'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['tell'])) {
        $tell = $_POST['tell'];
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    if (isset($_POST['birthday'])) {
        $birthday = $_POST['birthday'];
    }

    if (isset($id)||isset($name)||isset($tell)||isset($age)||isset($birthday)){
         $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

         try{
             $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
             echo "接続に成功しました<br>";
         }catch(PDOException $Exception){
             die('接続に失敗しました:'.$Exception->getMessage().'<br>');
         }

         echo "-----------------------<br>";

         $sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday) VALUES (:profilesID,:name,:tell,:age,:birthday)";

         $query = $pdo_object->prepare($sql);

         $query -> bindValue(':profilesID',$id);
         $query -> bindValue(':name',$name);
         $query -> bindValue(':tell',$tell);
         $query -> bindValue(':age',$age);
         $query -> bindValue(':birthday',$birthday);

         $query->execute();
         echo "データを追加しました<br>";

         $pdo_object = null;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>課題７−９</title>
    </head>
    <body>
        <h2>データの追加</h2>
        <form action="課題７−９.php" method="post">
            ID<input type='text' name='profilesID' placeholder='(例)3' required>
            名前<input type='text' name='name' placeholder='(例)山田 太郎'>
            電話番号<input type='text' name='tell' placeholder='(例)1234-56-7890'>
            年齢<input type='text' name='age' placeholder='(例)30'>
            誕生日<input type='text' name='birthday' placeholder='(例)2000-01-01'>
            <input type="submit" name="search" value="追加">
        </form>
    </body>
</html>
