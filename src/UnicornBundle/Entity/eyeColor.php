<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eyeColor
 */
class eyeColor
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $color;


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
     * Set color
     *
     * @param string $color
     * @return eyeColor
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }
}
