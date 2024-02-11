<?php

// インターフェース
interface ProductInterface {
    public function getProduct();
}

// インターフェース
interface NewsInterface {
    public function getNews();
}

// 親クラス・規定クラス・スーパークラス
class BaseProduct {
    public function echoProduct() {
        echo '親クラスです';
    }

    // オーバーライド（上書き）
    public function getProduct() {
        echo '親の関数です';
    }
}

// 子クラス・派生クラス・サブクラス
class Product implements ProductInterface, NewsInterface {
    // 変数
    private $product = [];

    // 関数

    function __construct($product) {
        $this->product = $product;
    }

    public function getProduct() {
        echo $this->product;
    }

    public function addProduct($item) {
        $this->product .= $item;
    }

    public function getNews() {
        echo 'ニュースです';
    }

    public static function getStaticProduct($str) {
        echo $str;
    }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

$instance->echoProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// 静的（static）クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';

?>