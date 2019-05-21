<?php

namespace SpaceSimulatorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * logHistory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SpaceSimulatorBundle\Entity\logHistoryRepository")
 */
class logHistory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSimulation", type="integer")
     */
    private $idSimulation;

    /**
     * @var string
     *
     * @ORM\Column(name="nameSimulator", type="string", length=255)
     */
    private $nameSimulator;

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="cardinalPoint", type="string", length=255)
     */
    private $cardinalPoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTravel", type="integer")
     */
    private $idTravel;


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
     * Set idSimulation
     *
     * @param integer $idSimulation
     * @return logHistory
     */
    public function setIdSimulation($idSimulation)
    {
        $this->idSimulation = $idSimulation;

        return $this;
    }

    /**
     * Get idSimulation
     *
     * @return integer 
     */
    public function getIdSimulation()
    {
        return $this->idSimulation;
    }

    /**
     * Get nameSimulation
     *
     * @return string
     */
    public function getNameSimulation()
    {
        return $this->nameSimulator;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return logHistory
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Set nameSimulator
     *
     * @param string $nameSimulator
     * @return logHistory
     */
    public function setNameSimulator($nameSimulator)
    {
        $this->nameSimulator = $nameSimulator;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set cardinalPoint
     *
     * @param string $cardinalPoint
     * @return logHistory
     */
    public function setCardinalPoint($cardinalPoint)
    {
        $this->cardinalPoint = $cardinalPoint;

        return $this;
    }

    /**
     * Get cardinalPoint
     *
     * @return string 
     */
    public function getCardinalPoint()
    {
        return $this->cardinalPoint;
    }

    /**
     * Set idTravel
     *
     * @param integer $idTravel
     * @return logHistory
     */
    public function setIdTravel($idTravel)
    {
        $this->idTravel = $idTravel;

        return $this;
    }

    /**
     * Get idTravel
     *
     * @return integer 
     */
    public function getIdTravel()
    {
        return $this->idTravel;
    }
}
