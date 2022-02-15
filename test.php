<?php

use User\Nurlanexercices\Payments\Classes\Click;
use User\Nurlanexercices\Payments\PaymentSystem;

require 'vendor/autoload.php';

$payment = new PaymentSystem();
$click = new Click();

$translation = new \Yandex\Translate\Translation();