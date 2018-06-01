<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1-6-2018
 * Time: 12:29
 */

namespace AppBundle\Entity;

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
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }


    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}