<?php
    date_default_timezone_set('Asia/Tokyo');
    $stamp = mktime();
    $date1 = date('Y-m-d G:i:s',$stamp);

    $access_time = $date1;
    setcookie('LastLoginDate', $access_time);

    $lastDate = $_COOKIE['LastLoginDate'];

    echo '前回ログイン日は、'.$lastDate.'です！';
 ?>
