<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * plik
 *
 * @ORM\Table(name="plik")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\plikRepository")
 */
class plik
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
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=50)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="sciezka", type="string", length=100)
     */
    private $sciezka;

    /**
     * @var int
     *
     * @ORM\Column(name="nr_kursu", type="integer")
     */
    private $nrKursu;


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
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return plik
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set sciezka
     *
     * @param string $sciezka
     *
     * @return plik
     */
    public function setSciezka($sciezka)
    {
        $this->sciezka = $sciezka;

        return $this;
    }

    /**
     * Get sciezka
     *
     * @return string
     */
    public function getSciezka()
    {
        return $this->sciezka;
    }

    /**
     * Set nrKursu
     *
     * @param integer $nrKursu
     *
     * @return plik
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
}

