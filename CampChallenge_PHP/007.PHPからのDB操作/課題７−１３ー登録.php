<?php
    if (empty($_POST['day'])) {
        $day = null;
    } elseif (isset($_POST['day'])) {
        $day = $_POST['day'];
    }
    if (empty($_POST['time'])) {
        $time = null;
    } elseif (isset($_POST['time'])) {
        $time = $_POST['time'];
    }
    if (empty($_POST['subject'])) {
        $subject = null;
    } elseif (isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }
    if (empty($_POST['teacher'])) {
        $teacher = null;
    } elseif (isset($_POST['teacher'])) {
        $teacher = $_POST['teacher'];
    }

    if (isset($day)&&isset($time)&&isset($subject)&&isset($teacher)){
         $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

         if ($subject == "休み" && $teacher == "休み") {
             $subject = "";
             $teacher = "";
         } elseif ($subject == "自習" && $teacher == "自習") {
             $teacher = "-----";
         }

         $sql = "UPDATE timetable1 SET subject='$subject',teacher='$teacher' WHERE day='$day' AND time=$time";
         $query = $pdo_object->prepare($sql);
         $query->execute();

         $pdo_object = null;
    }
 ?>

 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <title>登録画面</title>
     </head>
     <body>
         <h2>教科の登録</h2>
         <form action="課題７−１３ー登録.php" method="post">
            <p>曜日</p>
            <select name="day">
                <option value="Monday">月曜日</option>
                <option value="Tuesday">火曜日</option>
                <option value="Wednesday">水曜日</option>
                <option value="Thursday">木曜日</option>
                <option value="Friday">金曜日</option>
                <option value="Saturday">土曜日</option>
                <option value="Sunday">日曜日</option>
            </select>
            <p>時限</p>
            <select name="time">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
            </select>
            <p>教科</p>
            <select name="subject">
                <option value="国語">国語</option>
                <option value="数学">数学</option>
                <option value="理科">理科</option>
                <option value="社会">社会</option>
                <option value="英語">英語</option>
                <option value="自習">自習</option>
                <option value="休み">休み</option>
            </select>
            <p>担当講師</p>
            <select name="teacher">
                <option value="佐藤">佐藤</option>
                <option value="鈴木">鈴木</option>
                <option value="高橋">高橋</option>
                <option value="田中">田中</option>
                <option value="伊藤">伊藤</option>
                <option value="渡辺">渡辺</option>
                <option value="自習">自習</option>
                <option value="休み">休み</option>
            </select>
            <br><br><br>
            <input type="submit" name="submit" value="登録">
            <a href="http://localhost:8888/課題７−１３.php/">時間割へ戻る</a>
         </form>
     </body>
 </html>
