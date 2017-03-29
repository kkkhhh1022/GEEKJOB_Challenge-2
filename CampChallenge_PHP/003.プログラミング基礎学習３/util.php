<?php
    function my_profile() {
        echo "名前: 宮田優真".'<br>';
        echo "生年月日: 9/10/1993".'<br>';
        echo "自己紹介: 中野区に住んでます。".'<br>';
    }

    function sort_out($a) {
        if ($a % 2 == 0) {
            echo "偶数".'<br>';
        } else {
            echo "奇数".'<br>';
        }
    }
 ?>
