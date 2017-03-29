<?php
    $prof1 = array(
        id => 1,
        name => "たかはし",
        birth_day => "06/18/1989",
        address => "Tokyo",
    );

    $prof2 = array(
        id => 2,
        name => "ささき",
        birth_day => "10/28/1978",
        address => "Osaka",
    );

    $prof3 = array(
        id => 3,
        name => "わたなべ",
        birth_day => "01/09/1992",
        address => "Fukuoka",
    );

    $prof = array(
        1 => $prof1,
        2 => $prof2,
        3 => $prof3,
    );

    foreach($prof as $num => $prof_num){
        foreach($prof_num as $key => $value){
            if (($key==id)||($key==address)) {
                continue;
            } else {
                echo "$key:$value<br>";
            }
        }
    }
 ?>
