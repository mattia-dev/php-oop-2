<?php

class User {

    public $name;
    public $surname;
    public $premium;
    public $creditCard = [];
    public $cart = [];

    public function __construct(string $userName, string $userSurname, bool $userPremium) {
        $this->name = $userName;
        $this->surname = $userSurname;
        $this->premium = $userPremium;
    }

    public function addCreditCard(CreditCard $creditCard) {
        $expires =  date_create_from_format("my", $creditCard->expiryDate);
        $now =  new DateTime();

        if ($expires < $now) {
            // throw new Exception("La carta inserita è scaduta!"); --> per qualche motivo non funziona
            echo "La carta che stai cercando di aggiungere è scaduta! Prova con un'altra carta!";
        } else {
            $this->creditCard[] = $creditCard;
        }
    }

    public function addToCart(Product $product) {
        $this->cart[] = $product;
    }

    public function buy() {
        $total = 0;
        foreach($this->cart as $product) {
            // var_dump($product);
            $total += $product->price;
            $product->changeAvailableItems(); 
        }
        echo $this->checkForDiscount($total);
    }

    public function checkForDiscount($price) {
        if ($this->premium) {
            return "Il totale da pagare è " . $price . ". In quanto utente premium, il totale scontato per te è di " . round($price / 100 * 60, 2) . ".";
        } else {
            return "Il totale da pagare è " . $price . ".";
        }
    }

}