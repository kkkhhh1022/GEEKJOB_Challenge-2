<?php
    date_default_timezone_set('Asia/Tokyo');
        $log_time = mktime();
        $date1 = date('Y-m-d G:i:s',$log_time);
        $log_msg = "$date1:開始<br>";
        error_log($log_msg,3,'4-10-log.txt');

    $shop = array(
        "石鹸" => "200",
        "お茶" => "100",
        "お米" => "900",
    );
    error_log("配列を作成しました<br>",3,'4-10-log.txt');

    $shop_meat = array("肉" => "300");
    array_merge($shop,$shop_meat);
    error_log("商品を追加しました<br>",3,'4-10-log.txt');

    asort($shop);
    error_log("商品を並べました<br>",3,'4-10-log.txt');

    array_reverse($shop);
    error_log("商品を逆順にしました<br>",3,'4-10-log.txt');

    array_shift($shop);
    error_log("先頭の商品を削除しました<br>",3,'4-10-log.txt');

    $log_msg = "$date1:終了<br>";
    error_log($log_msg,3,'4-10-log.txt');

    $read_log = file_get_contents('4-10-log.txt');
    echo $read_log;


 ?>
