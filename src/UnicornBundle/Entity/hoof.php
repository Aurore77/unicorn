<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hoof
 */
class hoof
{
    public function __toString()
    {
        return $this->hoofType;
    }
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $hoofType;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hoofType
     *
     * @param string $hoofType
     * @return hoof
     */
    public function setHoofType($hoofType)
    {
        $this->hoofType = $hoofType;

        return $this;
    }

    /**
     * Get hoofType
     *
     * @return string 
     */
    public function getHoofType()
    {
        return $this->hoofType;
    }
}
