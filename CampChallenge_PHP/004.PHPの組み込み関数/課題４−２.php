<?php
    date_default_timezone_set('Asia/Tokyo');    #タイムゾーンを東京に設定
    $stamp = mktime();
    $date1 = date('Y-m-d G:i:s',$stamp);
    echo $date1;
 ?>
