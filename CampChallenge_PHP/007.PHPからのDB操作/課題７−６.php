<?php
    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
        echo "接続に成功しました<br>";
    }catch(PDOException $Exception){
        die('接続に失敗しました:'.$Exception->getMessage().'<br>');
    }

    echo "-----------------------<br>";

    $sql = "DELETE FROM profiles WHERE profilesID=6";

    $query = $pdo_object->prepare($sql);

    $query->execute();

    echo "削除に成功しました<br>";


    echo "-----------------------<br>";


    $pdo_object = null;
 ?>
