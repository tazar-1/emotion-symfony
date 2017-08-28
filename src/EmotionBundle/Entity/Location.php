<?php
/**
 * Created by PhpStorm.
 * User: Antoine.B
 * Date: 26/08/2017
 * Time: 00:57
 */

namespace EmotionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Location
 * @ORM\Entity
 * @package EmotionBundle\Entity
 */

class Location
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO");
     */
    private $id;

    /**
     * @ORM\Column(name="date_location", type="date", nullable=true)
     */
    private $date_location;

    /**
     * @ORM\Column(name="retour_location", type="date", nullable=true)
     */
    private $retour_location;

    /**
     * @ORM\Column(name="prix_location", type="integer", nullable=true)
     */
    private $prix_location;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $id_vehicule;

    /**
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $id_users;

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
    public function getDateLocation()
    {
        return $this->date_location;
    }

    /**
     * @param mixed $date_location
     */
    public function setDateLocation($date_location)
    {
        $this->date_location = $date_location;
    }

    /**
     * @return mixed
     */
    public function getRetourLocation()
    {
        return $this->retour_location;
    }

    /**
     * @param mixed $retour_location
     */
    public function setRetourLocation($retour_location)
    {
        $this->retour_location = $retour_location;
    }

    /**
     * @return mixed
     */
    public function getPrixLocation()
    {
        return $this->prix_location;
    }

    /**
     * @param mixed $prix_location
     */
    public function setPrixLocation($prix_location)
    {
        $this->prix_location = $prix_location;
    }

    /**
     * @return mixed
     */
    public function getIdVehicule()
    {
        return $this->id_vehicule;
    }

    /**
     * @param mixed $id_vehicule
     */
    public function setIdVehicule($id_vehicule)
    {
        $this->id_vehicule = $id_vehicule;
    }

    /**
     * @return mixed
     */
    public function getIdUsers()
    {
        return $this->id_users;
    }

    /**
     * @param mixed $id_users
     */
    public function setIdUsers($id_users)
    {
        $this->id_users = $id_users;
    }

}