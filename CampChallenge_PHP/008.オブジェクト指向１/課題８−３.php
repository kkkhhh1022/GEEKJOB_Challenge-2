<?php
    class Human {
        public $name;
        public $gender;
        public function info($n,$g) {
            $this->name = $n;
            $this->gender = $g;
        }
        public function hello() {
            echo "名前は".$this->name."です。性別は".$this->gender."です。<br>";
        }
    }

    class Superman extends Human {
        public function clear() {
            $this->name = null;
            $this->gender = null;
        }
    }

    $taro = new Superman();
    $taro->info("山田 太郎","男");
    $taro->hello();
    $taro->clear();
    $taro->hello();
 ?>
