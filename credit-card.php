<?php

class CreditCard {
    private $number;
    public $expiryDate;
    private $securityCode;

    public function __construct(int $cardNumber, string $cardExpiryDate, int $cardSecurityCode) {
        $this->number = $cardNumber;
        $this->expiryDate = $cardExpiryDate;
        $this->securityCode = $cardSecurityCode;
    }
}