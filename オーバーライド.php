<?php
class Animal {
    public function makeSound() {
        echo "何か鳴く<br>";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "にゃー<br>";
    }
}

$cat = new Cat();
$cat->makeSound(); // 出力: にゃー
?>
