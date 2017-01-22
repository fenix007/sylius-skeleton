<?php
namespace AppBundle\Entity;

use \Sylius\Component\Core\Model\ProductTranslation as BaseProductTranslation;

class ProductTranslation extends BaseProductTranslation
{
    /** @var string $sizeAdvice */
    private $sizeAdvice;

    /**
     * @return string
     */
    public function getSizeAdvice()
    {
        return $this->sizeAdvice;
    }

    /**
     * @param string $sizeAdvice
     */
    public function setSizeAdvice($sizeAdvice)
    {
        $this->sizeAdvice = $sizeAdvice;
    }
}
