<?php
    function my_profile() {
        echo "名前: 宮田優真".'<br>';
        echo "生年月日: 9/10/1993".'<br>';
        echo "自己紹介: 中野区に住んでます。".'<br>';
        $bool = true;
        return $bool;
    }

    $seihi = my_profile();
    for ($i=1; $i<=10; $i++) {
        if ($seihi == true) {
            my_profile();
            echo "この処理は実行できました<br>";
        } else {
            echo "正しく実行できませんでした<br>";
        }
    }
 ?>
