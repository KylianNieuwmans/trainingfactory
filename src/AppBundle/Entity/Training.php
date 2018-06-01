<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1-6-2018
 * Time: 12:29
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="trainingen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrainingRepository")
 */

class Training implements \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $beschrijving;

    /**
     * @ORM\Column(type="time")
     */
    private $duratie;

    /**
     * @ORM\Column(type="integer")
     */
    private $extra_kosten;

    /**
     * @ORM\OneToMany(targetEntity="Les", mappedBy="training")
     */
    private $les;

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }


    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
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

    /**
     * @return mixed
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * @param mixed $beschrijving
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;
    }

    /**
     * @return mixed
     */
    public function getDuratie()
    {
        return $this->duratie;
    }

    /**
     * @param mixed $duratie
     */
    public function setDuratie($duratie)
    {
        $this->duratie = $duratie;
    }

    /**
     * @return mixed
     */
    public function getExtraKosten()
    {
        return $this->extra_kosten;
    }

    /**
     * @param mixed $extra_kosten
     */
    public function setExtraKosten($extra_kosten)
    {
        $this->extra_kosten = $extra_kosten;
    }

    /**
     * @return mixed
     */
    public function getLes()
    {
        return $this->les;
    }

    /**
     * @param mixed $les
     */
    public function setLes($les)
    {
        $this->les = $les;
    }
}