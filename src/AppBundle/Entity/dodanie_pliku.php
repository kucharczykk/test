<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * dodanie_pliku
 *
 * @ORM\Table(name="dodanie_pliku")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\dodanie_plikuRepository")
 */
class dodanie_pliku
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_dodania", type="datetime")
     */
    private $dataDodania;

    /**
     * @var int
     *
     * @ORM\Column(name="nr_kursu", type="integer")
     */
    private $nrKursu;

    /**
     * @var int
     *
     * @ORM\Column(name="nr_plik", type="integer")
     */
    private $nrPlik;

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
     * Set dataDodania
     *
     * @param \DateTime $dataDodania
     *
     * @return dodanie_pliku
     */
    public function setDataDodania($dataDodania)
    {
        $this->dataDodania = $dataDodania;

        return $this;
    }

    /**
     * Get dataDodania
     *
     * @return \DateTime
     */
    public function getDataDodania()
    {
        return $this->dataDodania;
    }

    /**
     * Set nrKursu
     *
     * @param integer $nrKursu
     *
     * @return dodanie_pliku
     */
    public function setNrKursu($nrKursu)
    {
        $this->nrKursu = $nrKursu;

        return $this;
    }

    /**
     * Get nrKursu
     *
     * @return int
     */
    public function getNrKursu()
    {
        return $this->nrKursu;
    }

    /**
     * Set nrPlik
     *
     * @param integer $nrPlik
     *
     * @return dodanie_pliku
     */
    public function setNrPlik($nrPlik)
    {
        $this->nrPlik = $nrPlik;

        return $this;
    }

    /**
     * Get nrPlik
     *
     * @return int
     */
    public function getNrPlik()
    {
        return $this->nrPlik;
    }

    /**
     * Set nrUser
     *
     * @param integer $nrUser
     *
     * @return dodanie_pliku
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

