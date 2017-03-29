<?php
    function prof() {
        $id = 1;
        $name = "takahashi";
        $birth_day = "06/18/1989";
        $address = "Tokyo";
        return array($id,$name,$birth_day,$address);
    }

    $prof = prof();
    foreach($prof as $value) {
        echo "$value<br>";
    }
 ?>
