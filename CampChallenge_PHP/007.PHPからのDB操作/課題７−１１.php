<?php
    if (isset($_POST['profilesID'])) {
        $id = $_POST['profilesID'];
    }
    if (empty($_POST['name'])) {
        $name = null;
    } elseif (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (empty($_POST['tell'])) {
        $tell = null;
    } elseif (isset($_POST['tell'])) {
        $tell = $_POST['tell'];
    }
    if (empty($_POST['age'])) {
        $age = null;
    } elseif (isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    if (empty($_POST['birthday'])) {
        $birthday = null;
    } elseif (isset($_POST['birthday'])) {
        $birthday = $_POST['birthday'];
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

         if (isset($name)) {
             $sql = "UPDATE profiles SET name=:name WHERE profilesID=:profilesID";
             $query = $pdo_object->prepare($sql);
             $query -> bindValue(':profilesID',$id);
             $query -> bindValue(':name',$name);
             $query->execute();
         }
         if (isset($tell)) {
             $sql = "UPDATE profiles SET tell=:tell WHERE profilesID=:profilesID";
             $query = $pdo_object->prepare($sql);
             $query -> bindValue(':profilesID',$id);
             $query -> bindValue(':tell',$tell);
             $query->execute();
         }
         if (isset($age)) {
             $sql = "UPDATE profiles SET age=:age WHERE profilesID=:profilesID";
             $query = $pdo_object->prepare($sql);
             $query -> bindValue(':profilesID',$id);
             $query -> bindValue(':age',$age);
             $query->execute();
         }
         if (isset($birthday)) {
             $sql = "UPDATE profiles SET birthday=:birthday WHERE profilesID=:profilesID";
             $query = $pdo_object->prepare($sql);
             $query -> bindValue(':profilesID',$id);
             $query -> bindValue(':birthday',$birthday);
             $query->execute();
         }

        //  $query->execute();
         echo "データを更新しました<br>";

         $pdo_object = null;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>課題７ー１１</title>
    </head>
    <body>
        <h2>データの更新</h2>
        <p>※数字は半角で入力してください</p>
        <form action="課題７−１１.php" method="post">
            更新するID<br>
            ID<input type='text' name='profilesID' placeholder='(例)3' required><br>
            更新する項目<br>
            名前<input type='text' name='name' placeholder='(例)山田 太郎'>
            電話番号<input type='text' name='tell' placeholder='(例)1234-56-7890'>
            年齢<input type='text' name='age' placeholder='(例)30'>
            誕生日<input type='text' name='birthday' placeholder='(例)2000-01-01'>
            <input type="submit" name="search" value="更新">
        </form>
    </body>
</html>
