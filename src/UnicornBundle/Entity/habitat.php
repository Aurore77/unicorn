<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * habitat
 */
class habitat
{
    public function __toString()
    {
        return $this->nameHabitat;
    }
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameHabitat;


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
     * Set nameHabitat
     *
     * @param string $nameHabitat
     * @return habitat
     */
    public function setNameHabitat($nameHabitat)
    {
        $this->nameHabitat = $nameHabitat;

        return $this;
    }

    /**
     * Get nameHabitat
     *
     * @return string 
     */
    public function getNameHabitat()
    {
        return $this->nameHabitat;
    }
}
