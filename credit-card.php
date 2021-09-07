<?php

class CreditCard extends User {
    private $number;
    private $expiryDate;
    private $securityCode;

    public function __construct(int $cardNumber, int $cardExpiryDate, int $cardSecurityCode) {
        $this->number = $cardNumber;
        $this->expiryDate = $cardExpiryDate;
        $this->securityCode = $cardSecurityCode;
    }
}