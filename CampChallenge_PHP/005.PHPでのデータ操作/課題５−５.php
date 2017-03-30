<?php
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $hobby = $_POST['hobby'];

    $data = array($name,$gender,$hobby);

    setcookie('LastLoginName',$name);
    $last_name = $_COOKIE['LastLoginName'];

    setcookie('LastLoginGender',$gender);
    $last_gender = $_COOKIE['LastLoginGender'];

    setcookie('LastLoginHobby',$hobby);
    $last_hobby = $_COOKIE['LastLoginHobby'];

    $last_data = array($last_name,$last_gender,$last_hobby);

    echo "前回のデータ<br>";
    foreach ($last_data as $value) {
        echo "$value<br>";
    }

    echo "今回のデータ<br>";
    foreach ($data as $value) {
        echo "$value<br>";
    }

 ?>
