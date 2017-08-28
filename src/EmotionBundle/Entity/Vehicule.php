<?php
/**
 * Created by PhpStorm.
 * User: Antoine.B
 * Date: 26/08/2017
 * Time: 00:30
 */

namespace EmotionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Vehicule
 * @ORM\Entity(repositoryClass="EmotionBundle\Entity\VehiculeRepository")
 * @package EmotionBundle\Entity
 */

class Vehicule
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO");
     */
    private $id;

    /**
     * @ORM\Column(name="marque", type="string", length=255, nullable=true)
     */
    private $marque;

    /**
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(name="numserie", type="string", length=255, nullable=true)
     */
    private $numserie;

    /**
     * @ORM\Column(name="couleur", type="string", length=255, nullable=true)
     */
    private $couleur;

    /**
     * @ORM\Column(name="immatriculation", type="string", length=255, nullable=true)
     */
    private $immatriculation;

    /**
     * @ORM\Column(name="villedepart", type="string", length=255, nullable=true)
     */
    private $villedepart;

    /**
     * @ORM\Column(name="nbkilometres", type="integer", nullable=true)
     */
    private $nbkilometres;

    /**
     * @ORM\Column(name="dateachat", type="date", nullable=true)
     */
    private $dateachat;

    /**
     * @ORM\Column(name="datedebutdispo", type="date", nullable=true)
     */
    private $datedispo;

    /**
     * @ORM\Column(name="datefindispo", type="date", nullable=true)
     */
    private $datefindispo;

    /**
     * @ORM\Column(name="prixachat", type="integer", nullable=true)
     */
    private $prixachat;

    /**
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getNumserie()
    {
        return $this->numserie;
    }

    /**
     * @param mixed $numserie
     */
    public function setNumserie($numserie)
    {
        $this->numserie = $numserie;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param mixed $immatriculation
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    }

    /**
     * @return mixed
     */
    public function getVilledepart()
    {
        return $this->villedepart;
    }

    /**
     * @param mixed $villedepart
     */
    public function setVilledepart($villedepart)
    {
        $this->villedepart = $villedepart;
    }

    /**
     * @return mixed
     */
    public function getNbkilometres()
    {
        return $this->nbkilometres;
    }

    /**
     * @param mixed $nbkilometres
     */
    public function setNbkilometres($nbkilometres)
    {
        $this->nbkilometres = $nbkilometres;
    }

    /**
     * @return mixed
     */
    public function getDateachat()
    {
        return $this->dateachat;
    }

    /**
     * @param mixed $dateachat
     */
    public function setDateachat($dateachat)
    {
        $this->dateachat = $dateachat;
    }

    /**
     * @return mixed
     */
    public function getDatedispo()
    {
        return $this->datedispo;
    }

    /**
     * @param mixed $datedispo
     */
    public function setDatedispo($datedispo)
    {
        $this->datedispo = $datedispo;
    }

    /**
     * @return mixed
     */
    public function getDatefindispo()
    {
        return $this->datefindispo;
    }

    /**
     * @param mixed $datefindispo
     */
    public function setDatefindispo($datefindispo)
    {
        $this->datefindispo = $datefindispo;
    }

    /**
     * @return mixed
     */
    public function getPrixachat()
    {
        return $this->prixachat;
    }

    /**
     * @param mixed $prixachat
     */
    public function setPrixachat($prixachat)
    {
        $this->prixachat = $prixachat;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}