<?php

class User {
    public $name;
    public $surname;
    private $balance;
    public $calculator;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        $this->balance = 0;
    }

    public function pay($amount) {
        if ($this->balance < $amount) {
            throw new Exception('Hisobda yetarli mablag yoq');
        }
        $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getHello() {
        return 'Hello '. $this->getFullName();
    }

    function sayNotHello() {
        return 'not hello' .$this->name;
    }

    private function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

}