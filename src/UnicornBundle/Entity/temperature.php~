<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * temperature
 */
class temperature
{
    public function __toString()
    {
        return $this->celsius;
    }
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $celsius;


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
     * Set celsius
     *
     * @param integer $celsius
     * @return temperature
     */
    public function setCelsius($celsius)
    {
        $this->celsius = $celsius;

        return $this;
    }

    /**
     * Get celsius
     *
     * @return integer 
     */
    public function getCelsius()
    {
        return $this->celsius;
    }
}
