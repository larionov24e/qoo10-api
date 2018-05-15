<?php

require_once 'vendor/autoload.php';

use Qoo10\Api\Items\Goods;
use Qoo10\Api\Qoo10ApiProcessor;
use Qoo10\Api\Qoo10CertGenerator;

$key = '1231231';
$userId = 1;
$password = 'asdasda';

$certGenerator = new Qoo10CertGenerator();
$cert = $certGenerator->certGenerate($key, $userId, $password);


$processor = new Qoo10ApiProcessor();
$processor->setCertificate($cert);

$goods = new Goods($processor);
$goods->setNewGoods([
    'blabla' => 1
]);