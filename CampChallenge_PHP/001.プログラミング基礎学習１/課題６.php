<?php

    $prices = $_GET["prices"];  //総額
    $num = $_GET["num"];   //個数
    $point3000 = 0;
    $point5000 = 0;
    $points = 0;
    // ①
    $zakka1 = $_GET["zakka1"];  //商品種別
    $zakka2 = $_GET["zakka2"];
    $zakka3 = $_GET["zakka3"];

    echo $zakka1.'<br>';
    echo $zakka2.'<br>';
    echo $zakka3.'<br>';

    // ②
    $priceOfNum = $prices / $num;
    echo $priceOfNum.'<br>';

    //③
    if (($prices >= 3000) && ($prices < 5000)) {
        $point3000 = $prices * 0.04;
    } elseif ($prices >= 5000) {
        $point5000 = $prices * 0.05;
    }
    $points = $point3000 + $point5000;
    echo $points.'<br>';
 ?>
