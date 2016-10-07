<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * furTexture
 */
class furTexture
{
    public function __toString()
    {
        return $this->texture;
    }
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $texture;


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
     * Set texture
     *
     * @param string $texture
     * @return furTexture
     */
    public function setTexture($texture)
    {
        $this->texture = $texture;

        return $this;
    }

    /**
     * Get texture
     *
     * @return string 
     */
    public function getTexture()
    {
        return $this->texture;
    }
}
