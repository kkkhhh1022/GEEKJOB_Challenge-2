<?php
    $lang = 0;
    $str = "あ";
    if ($str == "A") {
        $lang = 1;
    } elseif ($str == "あ") {
        $lang = 2;
    }

    switch ($lang) {
        case 1:
            echo "英語";
            break;
        case 2:
            echo "日本語";
            break;
    }
 ?>
