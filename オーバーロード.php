<?php
class Product {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? "設定されていません";
    }
}

$product = new Product();
$product->price = 500;
$product->name = "スマートフォン";

echo "商品名: " . $product->name . "<br>";
echo "価格: " . $product->price . "円<br>";
?>
