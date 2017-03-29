<?php
    $global_num = 3;
    function mult_count() {
        static $local_count = 0;    #static宣言
        global $global_num;    #global宣言
        $cal = $global_num * 2;
        echo "計算結果:$cal".'<br>';
        $global_num *= 2;
        $local_count += 1;
        echo "回数:$local_count".'<br>';
    }
    for($i=1;$i<=20;$i++){     #関数を20回表示
        mult_count();
    }
 ?>
