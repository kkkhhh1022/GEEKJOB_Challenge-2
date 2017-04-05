 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="課題７−１３.css">
         <title>○✖︎塾の時間割</title>
     </head>
     <body>
         <h2>○✖︎塾の時間割</h2>
         <table border="1" width="50%" style="table-layout: fixed;">
             <tr>
                 <td>時限/曜日</td>
                 <td>月曜日</td>
                 <td>火曜日</td>
                 <td>水曜日</td>
                 <td>木曜日</td>
                 <td>金曜日</td>
                 <td bgcolor="blue">土曜日</td>
                 <td bgcolor="red">日曜日</td>
             </tr>
        <?php
             $pdo_object = new PDO('mysql:host=localhost;dbname=challenge_db;charset=utf8','yuma','rikuhawk910');

             for ($i=1;$i<=4;$i++) {
                 echo "<tr>";
                 echo "<td>$i</td>";
                 $sql = "SELECT subject,teacher FROM timetable1 WHERE time=$i";
                 $query = $pdo_object->prepare($sql);
                 $query->execute();
                 $result = $query->fetchall(PDO::FETCH_ASSOC);
                 for ($j=0;$j<=6;$j++){
                 $arr = $result[$j];
                 if ($arr[sucject]==""&&$arr[teacher]==""){
                     echo "<td></td>";
                 } else {
                     echo "<td>教科:$arr[subject]<br>-------------<br>講師:$arr[teacher]</td>";
                 }
                }
                 echo "</tr>";
             }

             $pdo_object = null;

             ?>
         </table>
         <br>
         <a href="http://localhost:8888/課題７−１３ー登録.php/">登録画面へ</a>
     </body>
 </html>
