<?php

class Product {

    public $label;
    public $price;
    protected $availableItems;
    public $description;
    public $images = [];

    public function addDescription(string $productDescription) {
        $this->description = $productDescription;
    }

    public function addImage(string $productImage) {
        $this->images[] = $productImage;
    }

    public function getPrice() {
        return $this->price;
    }

    public function changeAvailableItems() {
        $this->availableItems -= 1;
    }

}

class TechProduct extends Product {

    private $isNew;
    private $hasChargerIncluded;

    public function __construct(string $productLabel, float $productPrice, int $productAvailableItems, bool $productIsNew, bool $productHasChargerIncluded ) {
        $this->label = $productLabel;
        $this->price = $productPrice;
        $this->availableItems = $productAvailableItems;
        $this->isNew = $productIsNew;
        $this->hasChargerIncluded = $productHasChargerIncluded;
    }

}

class BeautyProduct extends Product {

    private $isFreeFromAllergens;
    private $color;

    public function __construct(string $productLabel, float $productPrice, int $productAvailableItems, bool $productIsFreeFromAllergens, string $productColor ) {
        $this->label = $productLabel;
        $this->price = $productPrice;
        $this->availableItems = $productAvailableItems;
        $this->isNew = $productIsFreeFromAllergens;
        $this->color = $productColor;
    }

}