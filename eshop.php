<?php

class Eshop {

    public $name;
    public $products;

    public function __construct(string $eShopName, array $eShopProducts) {
        $this->name = $eShopName;
        $this->products = $eShopProducts;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        $productsList = '';

        foreach ($this->products as $product) {
            $productsList .= $product->label . ' ';
        }

        return $productsList;
    }

    public function removeProduct(Product $product) {
        $keyProductToRemove = array_search($product, $this->products);

        if($keyProductToRemove === false) {
            throw new Exception("L'animale non è presente nella fattoria");
        }

        unset($this->products[$keyProductToRemove]);

        $this->products = array_values($this->products);
    }

}