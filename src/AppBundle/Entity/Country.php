<?php
namespace AppBundle\Entity;

use Sylius\Component\Addressing\Model\Country as BaseCountry;

class Country extends BaseCountry
{
    /**
     * @var bool
     */
    private $flag;

    /**
     * @return bool
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }
}
