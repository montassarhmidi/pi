<?php

namespace ExamenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="ExamenBundle\Repository\ExamenRepository")
 */
class Examen
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
     * @ORM\ManyToOne(targetEntity="EmploiBundle\Entity\Matiere")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $idMatiere;

    /**
     * @var \DateTime
     * @Assert\GreaterThan("today")
     * @ORM\Column(name="date_examen", type="date")
     */
    private $dateExamen;

    /**
     * @var int
     *
     * @ORM\Column(name="coefficient", type="integer")
     */
    private $coefficient;


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
     * Set idMatiere
     *
     * @param integer $idMatiere
     *
     * @return Examen
     */
    public function setIdMatiere($idMatiere)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return int
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Set dateExamen
     *
     * @param \DateTime $dateExamen
     *
     * @return Examen
     */
    public function setDateExamen($dateExamen)
    {
        $this->dateExamen = $dateExamen;

        return $this;
    }

    /**
     * Get dateExamen
     *
     * @return \DateTime
     */
    public function getDateExamen()
    {
        return $this->dateExamen;
    }

    /**
     * Set coefficient
     *
     * @param integer $coefficient
     *
     * @return Examen
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return int
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }
}
