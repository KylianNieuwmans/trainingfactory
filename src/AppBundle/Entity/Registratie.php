<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 4-6-2018
 * Time: 12:26
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="registraties")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegistratieRepository")
 */
class Registratie implements \serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $payment;

    /**
     * @ORM\ManyToOne(targetEntity="Persoon", inversedBy="registratie")
     */
    private $persoon;

    /**
     * @ORM\ManyToOne(targetEntity="Les", inversedBy="les")
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
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return mixed
     */
    public function getPersoon()
    {
        return $this->persoon;
    }

    /**
     * @param mixed $persoon
     */
    public function setPersoon($persoon)
    {
        $this->persoon = $persoon;
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