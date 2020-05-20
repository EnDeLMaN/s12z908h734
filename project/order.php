<?php

use src\Manufacture\Bakery\Bakery;
use src\Entity\BaseRequest;

function myAutoLoad($className)
{
    $classPieces = explode("\\", $className);
    switch ($classPieces[0]) {
        case 'src':
            include __DIR__ .'/'. implode(DIRECTORY_SEPARATOR, $classPieces) . '.php';
            break;
    }
}
spl_autoload_register('myAutoLoad', '', true);

$bakery = new Bakery();
$baseRequest = new BaseRequest();
$baseRequest->setProductName($argv[1]);
$result = $bakery->produce($baseRequest);
printf($result === false ? $argv[1] . ' was not completed because troubles with ingredients or we haven`t this dish in our menu ' : $argv[1] . ' completed');
