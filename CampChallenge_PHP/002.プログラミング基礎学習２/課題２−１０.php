<?php
    $num = $_GET["num"];
    $div = $num;
    $i = 0;
    $j = 0;
    $k = 0;
    $l = 0;

    while ($div % 7 == 0) {
        $div /= 7;
        $i++;
    }
    while ($div % 5 == 0) {
        $div /= 5;
        $j++;
    }
    while ($div % 3 == 0) {
        $div /= 3;
        $k++;
    }
    while ($div % 2 == 0) {
        $div /= 2;
        $l++;
    }

    echo "元の値:$num".'<br>';
    echo "1ケタの素因数:"."7*"."$i"."・5*"."$j"."・3*"."$k"."・2*"."$l".'<br>';
    echo "その他:$div";
 ?>
