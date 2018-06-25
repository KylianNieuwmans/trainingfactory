<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="lessen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class Les implements \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $tijd;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\Column(type="string")
     */
    private $locatie;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_personen;

    /**
     * @ORM\ManyToOne(targetEntity="Training", inversedBy="les")
     * @ORM\JoinColumn(name="training_id", referencedColumnName="id")
     */
    private $training;

    /**
     * @ORM\ManyToOne(targetEntity="Persoon", inversedBy="les")
     * @ORM\JoinColumn(name="instructeur_id", referencedColumnName="id")
     */
    private $instructeur;

    /**
     * @ORM\OneToMany(targetEntity="Registratie", mappedBy="les")
     */
    private $registratie;

    public function serialize()
    {
        return serialize(array(
            $this->id,

        ));
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            ) = unserialize($serialized);
    }

    /**
     * @return mixed
     */
    public function getInstructeur()
    {
        return $this->instructeur;
    }

    /**
     * @param mixed $instructeur
     */
    public function setInstructeur($instructeur)
    {
        $this->instructeur = $instructeur;
    }

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

    public function getSalt()
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function getTijd()
    {
        return $this->tijd;
    }

    /**
     * @param mixed $tijd
     */
    public function setTijd($tijd)
    {
        $this->tijd = $tijd;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param mixed $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }


    /**
     * @return mixed
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * @param mixed $locatie
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;
    }

    /**
     * @return mixed
     */
    public function getMaxPersonen()
    {
        return $this->max_personen;
    }

    /**
     * @param mixed $max_personen
     */
    public function setMaxPersonen($max_personen)
    {
        $this->max_personen = $max_personen;
    }

    /**
     * @return mixed
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * @param mixed $training
     */
    public function setTraining($training)
    {
        $this->training = $training;
    }

    /**
     * @return mixed
     */
    public function getRegistratie()
    {
        return $this->registratie;
    }

    /**
     * @param mixed $registratie
     */
    public function setRegistratie($registratie)
    {
        $this->registratie = $registratie;
    }


}
