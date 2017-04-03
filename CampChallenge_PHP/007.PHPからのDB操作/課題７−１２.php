<?php
    if (empty($_POST['profilesID'])) {
        $id = null;
    } elseif (isset($_POST['profilesID'])) {
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

    $result = array(
        'profilesID' => $id,
        'name' => $name,
        'tell' => $tell,
        'age' => $age,
        'birthday' => $birthday
    );


    if (isset($id)||isset($name)||isset($tell)||isset($age)||isset($birthday)){
         $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

         try{
             $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
             echo "接続に成功しました<br>";
             echo "-----------------------<br>";
             echo "該当データを表示します<br>";
         }catch(PDOException $Exception){
             die('接続に失敗しました:'.$Exception->getMessage().'<br>');
         }

         echo "-----------------------<br>";

        foreach($result as $key => $value) {
            if (isset($value)) {
                $sql = "SELECT * FROM profiles WHERE $key='$value'";
                $query = $pdo_object->prepare($sql);
                $query->execute();

                $search = $query->fetchall(PDO::FETCH_ASSOC);
                foreach($search as $arr) {
                    foreach($arr as $key => $value) {
                        echo "[$key]:$value<br>";
                    }
                    echo "-----------------------<br>";
            }
        }
        }
         $pdo_object = null;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>課題７ー１２</title>
    </head>
    <body>
        <h2>データの検索</h2>
        <p>※数字は半角で入力してください</p>
        <form action="課題７−１２.php" method="post">
            検索する項目<br>
            ID<input type='text' name='profilesID' placeholder='(例)3'>
            名前<input type='text' name='name' placeholder='(例)山田 太郎'>
            電話番号<input type='text' name='tell' placeholder='(例)1234-56-7890'>
            年齢<input type='text' name='age' placeholder='(例)30'>
            誕生日<input type='text' name='birthday' placeholder='(例)2000-01-01'>
            <input type="submit" name="search" value="検索">
        </form>
    </body>
</html>
