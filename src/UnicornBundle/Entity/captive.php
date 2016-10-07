<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * captive
 */
class captive
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
