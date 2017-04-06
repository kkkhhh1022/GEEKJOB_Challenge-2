<?php
    // 抽象化

    class Human {
        public $name;
        public $gender;
        public function info($n,$g) {
            $this->name = $n;
            $this->gender = $g;
        }
        public function hello() {
            echo "名前は".$this->name."です。性別は".$this->gender."です。";
        }
    }

    $taro = new Human();
    $taro->info("山田 太郎","男");
    $taro->hello();
 ?>
