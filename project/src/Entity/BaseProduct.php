<?php

namespace src\Entity;

abstract class BaseProduct
{
    const NAME_PANCAKE = 'pancake';
    const NAME_AMERICANO = 'americano';
    const NAME_AMERICANO_WITH_SUGAR = 'americano_with_sugar';

    /** @var array */
    protected $ingredients = [];

    /**
     * @return string
     */
    abstract public function getName(): string;

    /**
     * @return array
     */
    abstract public function getReceiptIngredients(): array;

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        if (count($this->getReceiptIngredients()) !== count($this->ingredients)) {
            return false;
        }

        foreach ($this->getReceiptIngredients() as $ingredientName => $className) {
            if (!isset($this->getIngredients()[$ingredientName]) || $this->getIngredients()[$ingredientName] !== $className) {
                return false;
            }
        }

        return true;
    }

    /**
     * @var array
     */
    public function setIngredients(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}
