<?php
    $fp = fopen('profile.txt','w');
    fwrite($fp,'私の名前は宮田優真です。');
    fclose($fp);
 ?>
