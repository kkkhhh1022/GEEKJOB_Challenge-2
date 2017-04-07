<?php
    date_default_timezone_set('Asia/Tokyo');
    const REDIRECT = "課題８ー４ーセッション.php";

    function logout_s(){
        session_unset();
        if (isset($_COOKIE['PHPSESSID'])) {
            setcookie('PHPSESSID', '', time() - 1800, '/');
        }
        session_destroy();
    }

    function session_chk(){
        $period_time = 60;
        session_start();
        if(!empty($_SESSION['last_access'])){
            if((mktime() - $_SESSION['last_access']) > $period_time){
                echo '<meta http-equiv="refresh" content="0;URL='.REDIRECT.'?mode=timeout">';
                logout_s();
                exit;
            }else{
                $_SESSION['last_access']=mktime();
            }
        }else{
            echo '<meta http-equiv="refresh" content="0;URL='.REDIRECT.'">';
            exit;
        }
    }

    session_chk();

 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>商品在庫一覧</title>
    </head>
    <body>
        <h2>商品在庫一覧</h2>
        <table border="1" width="50%" style="table-layout: fixed;">
            <tr>
                <td>商品ID</td>
                <td>商品名</td>
                <td>在庫数</td>
                <td>必要在庫数</td>
                <td>過不足</td>
            </tr>
            <?php

            $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
            $sql = "SELECT * FROM stock1";
            $query = $pdo_object->prepare($sql);
            $query->execute();
            $result = $query->fetchall(PDO::FETCH_ASSOC);

            foreach ($result as $arr) {
                echo "<tr>";
                foreach ($arr as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            $pdo_object = null;
            ?>
        </table>
        <br><br>
        <a href="http://localhost:8888/課題８ー４ー商品登録.php/">商品登録</a><br>
        <a href="http://localhost:8888/課題８ー４ーログアウト.php/">ログアウト</a><br>

    </body>
</html>
