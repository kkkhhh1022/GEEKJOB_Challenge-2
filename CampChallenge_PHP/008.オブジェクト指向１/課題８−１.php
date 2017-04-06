<?php
    // 抽象化

    class SportsCar  {
        public $car_name;
        public $maker;
        public $color;
        public $drive_system;
        public $speed;

        public function info() {
            echo $this->maker."の".$this->color."色の".$this->car_name."という車で、駆動方式は".$this->drive_system."です。";
        }
        public function run() {
            echo "時速".$this->speed."kmで走ります。";
        }
    }

    $civic = new SportsCar();
    $civic->car_name = 'civic';
    $civic->maker = 'honda';
    $civic->color = '黄';
    $civic->drive_system = 'FF';
    $civic->speed = 180;

    $civic->info();
    $civic->run();
 ?>
