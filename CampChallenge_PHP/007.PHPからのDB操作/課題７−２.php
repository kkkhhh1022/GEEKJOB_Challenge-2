<?php
    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
        echo "接続に成功しました<br>";
    }catch(PDOException $Exception){
        die('接続に失敗しました:'.$Exception->getMessage().'<br>');
    }

    $sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday) VALUES (:profilesID,:name,:tell,:age,:birthday)";

    $query = $pdo_object->prepare($sql);

    $query -> bindValue(':profilesID',6);
    $query -> bindValue(':name','佐藤 茂');
    $query -> bindValue(':tell','0987-654-321');
    $query -> bindValue(':age',28);
    $query -> bindValue(':birthday','1996-09-22');

    $query->execute();
    echo "データを追加しました<br>";

    $pdo_object = null;
 ?>
