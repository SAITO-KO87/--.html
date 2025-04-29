<?php
class Box {
    public $publicItem = "公開";
    protected $protectedItem = "保護";
    private $privateItem = "秘密";

    public function showItems() {
        echo "内部からアクセス:<br>";
        echo $this->publicItem . "<br>";
        echo $this->protectedItem . "<br>";
        echo $this->privateItem . "<br>";
    }
}

$box = new Box();
$box->showItems();

echo "<hr>";
echo "外部からアクセス:<br>";
echo $box->publicItem . "<br>"; // OK
// echo $box->protectedItem . "<br>"; // エラー
// echo $box->privateItem . "<br>";   // エラー
?>
