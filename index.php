<?php

//require_once 'User.php';
//
//$user = new User('Mirafzal', 'Shavkatov');
//echo $user->getBalance();
//echo '<br>';
//try {
//    $user->pay(10000);
//} catch (Exception $e) {
//    echo $e->getMessage();
//}
//echo '<br>';
//echo $user->getBalance();

require_once 'Calculator.php';

$calculator = new Calculator(1,2);
echo $calculator->add();
echo $calculator->substract();
echo $calculator->multiply();
echo $calculator->divide();

$product = new Product($name, $price, $nalog);

// $kurs = 11500
// $nalog = 15
// $price = 100

// getPrice($currency = 'uzs')

$product->getPrice(); // price * 1.15 = 115
$product->getPrice('usd'); // price * 1.15 = 115
// uzs yoki usd bo'masa exception

$user = new User('Mirafzal', 'Shavkatov', $calculator);
