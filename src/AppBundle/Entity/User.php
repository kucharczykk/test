<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="login", type="string", length=7)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="type_account", type="string", length=13)
     */
    private $typeAccount;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active;


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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set typeAccount
     *
     * @param string $typeAccount
     *
     * @return User
     */
    public function setTypeAccount($typeAccount)
    {
        $this->typeAccount = $typeAccount;

        return $this;
    }

    /**
     * Get typeAccount
     *
     * @return string
     */
    public function getTypeAccount()
    {
        return $this->typeAccount;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }
}
