<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * dostep
 *
 * @ORM\Table(name="dostep")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\dostepRepository")
 */
class dostep
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nr_pliku", type="integer")
     */
    private $nrPliku;

    /**
     * @var int
     *
     * @ORM\Column(name="nr_user", type="integer")
     */
    private $nrUser;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nrPliku
     *
     * @param integer $nrPliku
     *
     * @return dostep
     */
    public function setNrPliku($nrPliku)
    {
        $this->nrPliku = $nrPliku;

        return $this;
    }

    /**
     * Get nrPliku
     *
     * @return int
     */
    public function getNrPliku()
    {
        return $this->nrPliku;
    }

    /**
     * Set nrUser
     *
     * @param integer $nrUser
     *
     * @return dostep
     */
    public function setNrUser($nrUser)
    {
        $this->nrUser = $nrUser;

        return $this;
    }

    /**
     * Get nrUser
     *
     * @return int
     */
    public function getNrUser()
    {
        return $this->nrUser;
    }
}

