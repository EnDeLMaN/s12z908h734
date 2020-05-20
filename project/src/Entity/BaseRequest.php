<?php

namespace src\Entity;

class BaseRequest
{
    /** @var string */
    protected $productName;

    /** @var string $productName */
    public function setProductName(string $productName)
    {
        $this->productName = $productName;
    }

    public function getProductName() : string
    {
        return $this->productName;
    }
}
