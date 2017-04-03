<?php
    if (isset($_POST['key_word'])) {
        $key = $_POST['key_word'];
    }

     $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

     try{
         $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');
         echo "接続に成功しました<br>";
     }catch(PDOException $Exception){
         die('接続に失敗しました:'.$Exception->getMessage().'<br>');
     }

     echo "-----------------------<br>";

     if (!empty($key)) {
         if ($key=='松'||$key=='岡'||$key=='修'||$key=='造') {
             $sql = "SELECT * FROM profiles WHERE name='松岡 修造'";
         } elseif ($key =='吉'||$key=='田'||$key=='茂') {
             $sql = "SELECT * FROM profiles WHERE name='吉田 茂'";
         } elseif ($key=='佐'||$key=='藤'||$key=='清') {
             $sql = "SELECT * FROM profiles WHERE name='佐藤 清'";
         } else {
             echo "該当しません";
         }
     } else {
         echo "データを受け取れませんでした";
     }

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

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>課題７−８</title>
    </head>
    <body>
        <form action="課題７−８.php" method="post">
            <input type='text' name='key_word' maxlength='1' placeholder='漢字1文字で入力' required>
            <input type="submit" name="search" value="検索">
        </form>
    </body>
</html>
