<?php
    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
        echo "接続に成功しました<br>";
    }catch(PDOException $Exception){
        die('接続に失敗しました:'.$Exception->getMessage().'<br>');
    }

    echo "-----------------------<br>";

    $sql = "SELECT * FROM profiles WHERE profilesID=1";

    $query = $pdo_object->prepare($sql);

    $query->execute();

    $result = $query->fetchall(PDO::FETCH_ASSOC);
    foreach($result as $arr_num => $arr) {
        foreach($arr as $key => $value) {
            echo "[$key]:$value<br>";
        }
        echo "-----------------------<br>";
    }

    $pdo_object = null;
 ?>
