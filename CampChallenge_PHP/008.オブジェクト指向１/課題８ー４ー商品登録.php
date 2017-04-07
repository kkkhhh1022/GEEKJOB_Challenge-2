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
        $period_time = 180;
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


    if (empty($_POST['id'])) {
        $id = null;
    } elseif (isset($_POST['id'])) {
        $id = (int)$_POST['id'];
    }
    if (empty($_POST['name'])) {
        $name = null;
    } elseif (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (empty($_POST['residue'])) {
        $residue = null;
    } elseif (isset($_POST['residue'])) {
        $residue = (int)$_POST['residue'];
    }
    if (empty($_POST['regular_stock'])) {
        $regular_stock = null;
    } elseif (isset($_POST['regular_stock'])) {
        $regular_stock = (int)$_POST['regular_stock'];
    }
    $excess_or_deficiency = $residue - $regular_stock;

    if (isset($id)) {
        $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
        $sql = "SELECT id FROM stock1 where id=$id";
        $query = $pdo_object->prepare($sql);
        $query->execute();
        $result = $query->fetchall(PDO::FETCH_ASSOC);
        $arr = $result[0];

        if ($id == (int)$arr[id]) {
            echo "そのIDは使えません。";
        }  else {
            $sql = "INSERT INTO stock1(id,name,residue,regular_stock,excess_or_deficiency) VALUES($id,'$name',$residue,$regular_stock,$excess_or_deficiency)";
            $query = $pdo_object->prepare($sql);
            $query->execute();
            echo "登録しました。";
        }
    }
    $pdo_object = null;
?>

 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>商品登録画面</title>
     </head>
     <body>
         <h2>商品登録</h2>
         <form action="課題８ー４ー商品登録.php" method="post">
            <br>
            商品ID:<input type="number" name='id' required><br>
            商品名:<input type="text" name="name" required><br>
            在庫数:<input type="number" name='residue' required><br>
            必要在庫数:<input type="number" name='regular_stock' required><br>
            <input type="submit" name="submit" value="登録">
            <br><br>
            <a href="http://localhost:8888/課題８ー４ー商品一覧.php/">商品一覧</a><br>
            <a href="http://localhost:8888/課題８ー４ーログアウト.php/">ログアウト</a>
         </form>
     </body>
 </html>
