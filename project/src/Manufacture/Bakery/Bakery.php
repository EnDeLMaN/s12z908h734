<?php

namespace src\Manufacture\Bakery;

use src\Entity\BaseRequest;
use src\Manufacture\ManufactureInterface;
use src\Entity\Product\Pancake;
use src\Entity\Product\Coffee\Americano;
use src\Entity\Product\Coffee\AmericanoWithSugar;

class Bakery implements ManufactureInterface
{
    public function produce(BaseRequest $request)
    {
        switch($request->getProductName()) {
            case (new Pancake())->getName():
                $pancake = new Pancake();
                $pancake->setIngredients($pancake->getReceiptIngredients());
                return $pancake->isCompleted();
                break;
            case (new Americano())->getName():
                $americano = new Americano();
                $americano->setIngredients($americano->getReceiptIngredients());
                return $americano->isCompleted();
                break;
            case (new AmericanoWithSugar())->getName():
                $americanoWithSugar = new AmericanoWithSugar();
                $americanoWithSugar->setIngredients($americanoWithSugar->getReceiptIngredients());
                return $americanoWithSugar->isCompleted();
                break;
            default:
                return false;
        }
    }
}
