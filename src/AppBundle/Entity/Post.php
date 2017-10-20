<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="titolo", type="string", length=255)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuto", type="string", length=255)
     */
    private $contenuto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio", type="datetime", nullable=true)
     */
    private $dataInizio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine", type="datetime", nullable=true)
     */
    private $dataFine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio_prove", type="datetime", nullable=true)
     */
    private $dataInizioProve;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine_prove", type="datetime", nullable=true)
     */
    private $dataFineProve;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio_qual", type="datetime", nullable=true)
     */
    private $dataInizioQual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine_qual", type="datetime", nullable=true)
     */
    private $dataFineQual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio_gara", type="datetime", nullable=true)
     */
    private $dataInizioGara;

    /**
     * @var int
     *
     * @ORM\Column(name="giri_gara", type="integer", nullable=false)
     */
    private $girigara;

    /**
     * @var int
     *
     * @ORM\Column(name="attivo", type="integer")
     */
    private $attivo;

    /**
     * @var string
     *
     * @ORM\Column(name="altro", type="string", length=255, nullable=true)
     */
    private $altro;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;


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
     * Set titolo
     *
     * @param string $titolo
     *
     * @return Post
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set contenuto
     *
     * @param string $contenuto
     *
     * @return Post
     */
    public function setContenuto($contenuto)
    {
        $this->contenuto = $contenuto;

        return $this;
    }

    /**
     * Get contenuto
     *
     * @return string
     */
    public function getContenuto()
    {
        return $this->contenuto;
    }

    /**
     * Set dataInizio
     *
     * @param \DateTime $dataInizio
     *
     * @return Post
     */
    public function setDataInizio($dataInizio)
    {
        $this->dataInizio = $dataInizio;

        return $this;
    }

    /**
     * Get dataInizio
     *
     * @return \DateTime
     */
    public function getDataInizio()
    {
        return $this->dataInizio;
    }

    /**
     * Set dataFine
     *
     * @param \DateTime $dataFine
     *
     * @return Post
     */
    public function setDataFine($dataFine)
    {
        $this->dataFine = $dataFine;

        return $this;
    }

    /**
     * Get dataFine
     *
     * @return \DateTime
     */
    public function getDataFine()
    {
        return $this->dataFine;
    }

    /**
     * Set attivo
     *
     * @param integer $attivo
     *
     * @return Post
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;

        return $this;
    }

    /**
     * Get attivo
     *
     * @return int
     */
    public function getAttivo()
    {
        return $this->attivo;
    }

    /**
     * Set altro
     *
     * @param string $altro
     *
     * @return Post
     */
    public function setAltro($altro)
    {
        $this->altro = $altro;

        return $this;
    }

    /**
     * Get altro
     *
     * @return string
     */
    public function getAltro()
    {
        return $this->altro;
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return \DateTime
     */
    public function getDataInizioProve()
    {
        return $this->dataInizioProve;
    }

    /**
     * @param \DateTime $dataInizioProve
     */
    public function setDataInizioProve($dataInizioProve)
    {
        $this->dataInizioProve = $dataInizioProve;
    }

    /**
     * @return \DateTime
     */
    public function getDataFineProve()
    {
        return $this->dataFineProve;
    }

    /**
     * @param \DateTime $dataFineProve
     */
    public function setDataFineProve($dataFineProve)
    {
        $this->dataFineProve = $dataFineProve;
    }

    /**
     * @return \DateTime
     */
    public function getDataInizioQual()
    {
        return $this->dataInizioQual;
    }

    /**
     * @param \DateTime $dataInizioQual
     */
    public function setDataInizioQual($dataInizioQual)
    {
        $this->dataInizioQual = $dataInizioQual;
    }

    /**
     * @return \DateTime
     */
    public function getDataFineQual()
    {
        return $this->dataFineQual;
    }

    /**
     * @param \DateTime $dataFineQual
     */
    public function setDataFineQual($dataFineQual)
    {
        $this->dataFineQual = $dataFineQual;
    }

    /**
     * @return \DateTime
     */
    public function getDataInizioGara()
    {
        return $this->dataInizioGara;
    }

    /**
     * @param \DateTime $dataInizioGara
     */
    public function setDataInizioGara($dataInizioGara)
    {
        $this->dataInizioGara = $dataInizioGara;
    }

    /**
     * @return int
     */
    public function getGirigara()
    {
        return $this->girigara;
    }

    /**
     * @param int $girigara
     */
    public function setGirigara($girigara)
    {
        $this->girigara = $girigara;
    }



}

