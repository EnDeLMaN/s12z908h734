<?php

namespace src\Entity\Product\Coffee;

use src\Entity\BaseIngredient;
use src\Entity\BaseProduct;
use src\Entity\Ingredient\Milk;
use src\Entity\Ingredient\Water;

class Americano extends BaseProduct
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME_AMERICANO;
    }

    /**
     * @return array
     */
    public function getReceiptIngredients(): array
    {
        return [
            BaseIngredient::NAME_MILK => Milk::class,
            BaseIngredient::NAME_WATER => Water::class
        ];
    }
}
