<?php

class Balance
{
    private $balance = 10;
    private $frozen = false;

    function takeMoney($amount)
    {
        if ($amount > $this->balance) {
            throw new NotEnoughMoneyException('Not enough money');
        }
        if ($this->frozen) {
            throw new BalanceIsFrozenException('Balance is frozen');
        }
        $this->balance -= $amount;
    }
}