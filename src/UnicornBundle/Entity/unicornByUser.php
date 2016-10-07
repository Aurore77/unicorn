<?php

namespace UnicornBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * unicornByUser
 */
class unicornByUser
{
    /*

       @var int
       */
    private $id;

    /**

    @var int
     */
    private $idUser;

    /**

    @var int
     */
    private $idUnicorn;

    /**

    @var bool
     */
    private $captive;

    /**

    @var \DateTime
     */
    private $capturDate;

    /**

    @var bool
     */
    private $unicornUpdate;

    /**

    @var \DateTime
     */
    private $deleteUnicorn;

    /**
    @var \DateTime */ private $deleteDate;

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
     * Set idUser
     *
     * @param integer $idUser
     * @return unicornByUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idUnicorn
     *
     * @param integer $idUnicorn
     * @return unicornByUser
     */
    public function setIdUnicorn($idUnicorn)
    {
        $this->idUnicorn = $idUnicorn;

        return $this;
    }

    /**
     * Get idUnicorn
     *
     * @return integer
     */
    public function getIdUnicorn()
    {
        return $this->idUnicorn;
    }

    /**
     * Set captive
     *
     * @param boolean $captive
     * @return unicornByUser
     */
    public function setCaptive($captive)
    {
        $this->captive = $captive;

        return $this;
    }

    /**
     * Get captive
     *
     * @return boolean
     */
    public function getCaptive()
    {
        return $this->captive;
    }

    /**
     * Set capturDate
     *
     * @param \DateTime $capturDate
     * @return unicornByUser
     */
    public function setCapturDate($capturDate)
    {
        $this->capturDate = $capturDate;

        return $this;
    }

    /**
     * Get capturDate
     *
     * @return \DateTime
     */
    public function getCapturDate()
    {
        return $this->capturDate;
    }

    /**
     * Set unicornUpdate
     *
     * @param boolean $unicornUpdate
     * @return unicornByUser
     */
    public function setUnicornUpdate($unicornUpdate)
    {
        $this->unicornUpdate = $unicornUpdate;

        return $this;
    }

    /**
     * Get unicornUpdate
     *
     * @return boolean
     */
    public function getUnicornUpdate()
    {
        return $this->unicornUpdate;
    }

    /**
     * Set deleteUnicorn
     *
     * @param \DateTime $deleteUnicorn
     * @return unicornByUser
     */
    public function setDeleteUnicorn($deleteUnicorn)
    {
        $this->deleteUnicorn = $deleteUnicorn;

        return $this;
    }

    /**
     * Get deleteUnicorn
     *
     * @return \DateTime
     */
    public function getDeleteUnicorn()
    {
        return $this->deleteUnicorn;
    }

    /**
     * Set deleteDate
     *
     * @param \DateTime $deleteDate
     * @return unicornByUser
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    /**
     * Get deleteDate
     *
     * @return \DateTime
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return unicornByUser
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
