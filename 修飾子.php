<?php
class Car {
    public $maker = "Toyota";
    private $enginePower = "200HP";

    public function showInfo() {
        echo "メーカー: " . $this->maker . "<br>";
        echo "エンジン出力: " . $this->enginePower . "<br>";
    }
}

$car = new Car();
$car->showInfo();
// echo $car->enginePower; // ←これはエラーになる（privateなので）
?>
