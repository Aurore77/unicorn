<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cornForm
 */
class cornForm
{
    public function __toString()
    {
        return $this->nameForm;
    }
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameForm;


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
     * Set nameForm
     *
     * @param string $nameForm
     * @return cornForm
     */
    public function setNameForm($nameForm)
    {
        $this->nameForm = $nameForm;

        return $this;
    }

    /**
     * Get nameForm
     *
     * @return string 
     */
    public function getNameForm()
    {
        return $this->nameForm;
    }
}
