<?php
    $fp = fopen('profile1.txt','r');
    $file_txt = fgets($fp);
    fclose($fp);
    echo $file_txt;
 ?>
