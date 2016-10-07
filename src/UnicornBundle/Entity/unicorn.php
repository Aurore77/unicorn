<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * unicorn
 */
class unicorn
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \UnicornBundle\Entity\color
     */
    private $color;

    /**
     * @var \UnicornBundle\Entity\cornForm
     */
    private $cornForm;

    /**
     * @var \UnicornBundle\Entity\furTexture
     */
    private $furTexture;

    /**
     * @var \UnicornBundle\Entity\hairType
     */
    private $hairType;

    /**
     * @var \UnicornBundle\Entity\hoof
     */
    private $hoof;

    /**
     * @var \UnicornBundle\Entity\habitat
     */
    private $habitat;

    /**
     * @var \UnicornBundle\Entity\temperature
     */
    private $temperature;


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
     * Set name
     *
     * @param string $name
     * @return unicorn
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set color
     *
     * @param \UnicornBundle\Entity\color $color
     * @return unicorn
     */
    public function setColor(\UnicornBundle\Entity\color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \UnicornBundle\Entity\color 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set cornForm
     *
     * @param \UnicornBundle\Entity\cornForm $cornForm
     * @return unicorn
     */
    public function setCornForm(\UnicornBundle\Entity\cornForm $cornForm = null)
    {
        $this->cornForm = $cornForm;

        return $this;
    }

    /**
     * Get cornForm
     *
     * @return \UnicornBundle\Entity\cornForm 
     */
    public function getCornForm()
    {
        return $this->cornForm;
    }

    /**
     * Set furTexture
     *
     * @param \UnicornBundle\Entity\furTexture $furTexture
     * @return unicorn
     */
    public function setFurTexture(\UnicornBundle\Entity\furTexture $furTexture = null)
    {
        $this->furTexture = $furTexture;

        return $this;
    }

    /**
     * Get furTexture
     *
     * @return \UnicornBundle\Entity\furTexture 
     */
    public function getFurTexture()
    {
        return $this->furTexture;
    }

    /**
     * Set hairType
     *
     * @param \UnicornBundle\Entity\hairType $hairType
     * @return unicorn
     */
    public function setHairType(\UnicornBundle\Entity\hairType $hairType = null)
    {
        $this->hairType = $hairType;

        return $this;
    }

    /**
     * Get hairType
     *
     * @return \UnicornBundle\Entity\hairType 
     */
    public function getHairType()
    {
        return $this->hairType;
    }

    /**
     * Set hoof
     *
     * @param \UnicornBundle\Entity\hoof $hoof
     * @return unicorn
     */
    public function setHoof(\UnicornBundle\Entity\hoof $hoof = null)
    {
        $this->hoof = $hoof;

        return $this;
    }

    /**
     * Get hoof
     *
     * @return \UnicornBundle\Entity\hoof 
     */
    public function getHoof()
    {
        return $this->hoof;
    }

    /**
     * Set habitat
     *
     * @param \UnicornBundle\Entity\habitat $habitat
     * @return unicorn
     */
    public function setHabitat(\UnicornBundle\Entity\habitat $habitat = null)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return \UnicornBundle\Entity\habitat 
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    /**
     * Set temperature
     *
     * @param \UnicornBundle\Entity\temperature $temperature
     * @return unicorn
     */
    public function setTemperature(\UnicornBundle\Entity\temperature $temperature = null)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return \UnicornBundle\Entity\temperature 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }
    /**
     * @var \UnicornBundle\Entity\furColor
     */
    private $furColor;

    /**
     * @var \UnicornBundle\Entity\hairColor
     */
    private $hairColor;

    /**
     * @var \UnicornBundle\Entity\cornColor
     */
    private $cornColor;


    /**
     * Set furColor
     *
     * @param \UnicornBundle\Entity\furColor $furColor
     * @return unicorn
     */
    public function setFurColor(\UnicornBundle\Entity\furColor $furColor = null)
    {
        $this->furColor = $furColor;

        return $this;
    }

    /**
     * Get furColor
     *
     * @return \UnicornBundle\Entity\furColor 
     */
    public function getFurColor()
    {
        return $this->furColor;
    }

    /**
     * Set hairColor
     *
     * @param \UnicornBundle\Entity\hairColor $hairColor
     * @return unicorn
     */
    public function setHairColor(\UnicornBundle\Entity\hairColor $hairColor = null)
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * Get hairColor
     *
     * @return \UnicornBundle\Entity\hairColor 
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * Set cornColor
     *
     * @param \UnicornBundle\Entity\cornColor $cornColor
     * @return unicorn
     */
    public function setCornColor(\UnicornBundle\Entity\cornColor $cornColor = null)
    {
        $this->cornColor = $cornColor;

        return $this;
    }

    /**
     * Get cornColor
     *
     * @return \UnicornBundle\Entity\cornColor 
     */
    public function getCornColor()
    {
        return $this->cornColor;
    }
}
