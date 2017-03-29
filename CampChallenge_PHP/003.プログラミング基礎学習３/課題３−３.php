<?php
    function calculation ($num,$i=5,$type=false) {

        if ($type===true) {
            echo ($num * $i) * ($num * $i);
        } else {
            echo $num * $i;
        }
    }

    calculation (8,true);
    var_dump(calculation (8,true));
 ?>
