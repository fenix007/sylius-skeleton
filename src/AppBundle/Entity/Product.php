<?php

namespace AppBundle\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Resource\Model\ResourceInterface;

class Product extends BaseProduct implements ResourceInterface
{
    public function getSizeAdvice()
    {
        return $this->getTranslation()->getSizeAdvice();
    }

    public function setSizeAdvice($sizeAdvice)
    {
        return $this->getTranslation()->setSizeAdvice($sizeAdvice);
    }
}
