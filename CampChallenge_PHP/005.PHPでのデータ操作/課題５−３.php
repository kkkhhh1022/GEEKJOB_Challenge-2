<?php
    date_default_timezone_set('Asia/Tokyo');
    $stamp = mktime();
    $date1 = date('Y-m-d G:i:s',$stamp);

    session_start();

    $_SESSION['lastLoginDate'] = $date1;

    echo '前回ログイン日は、'.$_SESSION['lastLoginDate'].'です！';
 ?>
