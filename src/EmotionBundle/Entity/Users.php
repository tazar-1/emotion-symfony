<?php
/**
 * Created by PhpStorm.
 * User: Antoine.B
 * Date: 26/08/2017
 * Time: 00:37
 */

namespace EmotionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 * @ORM\Entity
 * @package EmotionBundle\Entity
 */

class Users
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO");
     */
    private $id;

    /**
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(name="nb_permis", type="integer", nullable=true)
     */
    private $nb_permis;

    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(name="pts_fidelite", type="integer", nullable=true)
     */
    private $pts_fidelite;

    /**
     * @ORM\Column(name="validationToken", type="string", length=255, nullable=true)
     */
    private $validationToken;

    /**
     * @ORM\Column(name="validate", type="boolean", nullable=true)
     */
    private $vaidate;

    /**
     * @ORM\Column(name="permissions", type="integer", nullable=true)
     */
    private $permissions;

    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updated_at;


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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getNbPermis()
    {
        return $this->nb_permis;
    }

    /**
     * @param mixed $nb_permis
     */
    public function setNbPermis($nb_permis)
    {
        $this->nb_permis = $nb_permis;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPtsFidelite()
    {
        return $this->pts_fidelite;
    }

    /**
     * @param mixed $pts_fidelite
     */
    public function setPtsFidelite($pts_fidelite)
    {
        $this->pts_fidelite = $pts_fidelite;
    }

    /**
     * @return mixed
     */
    public function getValidationToken()
    {
        return $this->validationToken;
    }

    /**
     * @param mixed $validationToken
     */
    public function setValidationToken($validationToken)
    {
        $this->validationToken = $validationToken;
    }

    /**
     * @return mixed
     */
    public function getVaidate()
    {
        return $this->vaidate;
    }

    /**
     * @param mixed $vaidate
     */
    public function setVaidate($vaidate)
    {
        $this->vaidate = $vaidate;
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param mixed $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

}