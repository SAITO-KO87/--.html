<?php
class Shape {
    protected function draw() {
        echo "図形を描画<br>";
    }

    public function show() {
        $this->draw(); // 自クラス内なら protected メソッドは呼べる
    }
}

class Circle extends Shape {
    protected function draw() {
        echo "円を描画<br>";
    }
}

$circle = new Circle();
// $circle->draw(); // エラー：protectedなので外部から呼べない
$circle->show(); // OK：内部から呼んでいる draw() が実行される
?>
