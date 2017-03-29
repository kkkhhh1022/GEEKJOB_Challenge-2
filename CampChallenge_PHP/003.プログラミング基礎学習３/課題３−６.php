<?php
    function prof($key){
        function prof1(){
            $id = 1;
            $name = "たかはし";
            $birth_day = "06/18/1989";
            $address = "Tokyo";
            return array($id,$name,$birth_day,$address);
        }
        $prof1 = prof1();

        function prof2(){
            $id = 2;
            $name = "ささき";
            $birth_day = "10/28/1978";
            $address = "Osaka";
            return array($id,$name,$birth_day,$address);
        }
        $prof2 = prof2();

        function prof3(){
            $id = 3;
            $name = "わたなべ";
            $birth_day = "01/9/1992";
            $address = "Fukuoka";
            return array($id,$name,$birth_day,$address);
        }
        $prof3 = prof3();

        if (($key=="た")||($key=="か")||($key=="は")||($key=="し")) {return $prof1;}
        elseif (($key=="さ")||($key=="き")) {return $prof2;}
        elseif (($key=="わ")||($key=="た")||($key=="な")||($key=="べ")) {return $prof3;}
    }

    $prof = prof("き");
    foreach($prof as $value) {
        echo "$value<br>";
    }
 ?>
