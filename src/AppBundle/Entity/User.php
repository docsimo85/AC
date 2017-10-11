<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_Registrazione", type="datetime")
     */
    private $dataRegistrazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_nascita", type="datetime")
     */
    private $dataNascita;

    /**
     * @var bool
     * @Assert\IsTrue()
     * @ORM\Column(name="Accettazione", type="boolean", options={"default":0})
     */
    private $accettazione;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->dataRegistrazione = new \DateTime();
        $this->enabled = 1;
        $this->roles = array('ROLE_USER');
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return User
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return User
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set dataRegistrazione
     *
     * @param \DateTime $dataRegistrazione
     *
     * @return User
     */
    public function setDataRegistrazione($dataRegistrazione)
    {
        $this->dataRegistrazione = $dataRegistrazione;

        return $this;
    }

    /**
     * Get dataRegistrazione
     *
     * @return \DateTime
     */
    public function getDataRegistrazione()
    {
        return $this->dataRegistrazione;
    }

    /**
     * Set dataNascita
     *
     * @param \DateTime $dataNascita
     *
     * @return User
     */
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;

        return $this;
    }

    /**
     * Get dataNascita
     *
     * @return \DateTime
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * @return bool
     */
    public function isAccettazione()
    {
        return $this->accettazione;
    }

    /**
     * @param bool $accettazione
     */
    public function setAccettazione($accettazione)
    {
        $this->accettazione = $accettazione;
    }


}
