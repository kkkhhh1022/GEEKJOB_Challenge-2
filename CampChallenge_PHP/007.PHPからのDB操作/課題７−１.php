<?php
    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
        echo "接続に成功しました";
    }catch(PDOException $Exception){
        die('接続に失敗しました:'.$Exception->getMessage());
    }

    $pdo_object = null;
 ?>
