<?php
    $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

    try{
        $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
        echo "接続に成功しました<br>";
    }catch(PDOException $Exception){
        die('接続に失敗しました:'.$Exception->getMessage().'<br>');
    }

    echo "-----------------------<br>";

    $sql = "UPDATE profiles SET name=:name,age=:age,birthday=:birthday WHERE profilesID=:value";

    $query = $pdo_object->prepare($sql);

    $query->bindValue(':value',1);
    $query->bindValue(':name','松岡 修造');
    $query->bindValue(':age',48);
    $query->bindValue(':birthday','1967-11-06');

    $query->execute();

    echo "更新に成功しました<br>";

    echo "-----------------------<br>";

    $pdo_object = null;
 ?>
