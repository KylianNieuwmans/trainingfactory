<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="gebruikers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class Persoon implements UserInterface,\Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, unique=true)
     */
    private $gebruikersnaam;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $wachtwoord;

    /**
     * @ORM\Column(type="string", length=20)
     */

    private $voornaam;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $tussenvoegsel;

    /**
     * @ORM\Column(type="string", length=20)
     */

    private $achternaam;

    /**
     * @ORM\Column(type="date")
     */
    private $geboortedatum;

    /**
     * @ORM\Column(type="date")
     */
    private $startdatum;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salaris;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $persoonsnummer;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adres;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $woonplaats;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */

    private $is_member;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */

    private $is_instructeur;

    /**
     * @ORM\OneToMany(targetEntity="Les", mappedBy="instructeur")
     *
     */
    private $les;

    /**
     * @ORM\OneToMany(targetEntity="Registratie", mappedBy="persoon")
     *
     */
    private $registratie;


    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->gebruikersnaam,
            $this->wachtwoord,
        ));
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->gebruikersnaam,
            $this->wachtwoord,
            ) = unserialize($serialized);


    }

    public function getId()
    {
        return $this->id;
    }

    public function getVoornaam()
    {
        return $this->voornaam;
    }

    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    public function getTussenvoegsel()
    {
        return $this->tussenvoegsel;
    }

    public function setTussenvoegsel($tussenvoegsel)
    {
        $this->tussenvoegsel = $tussenvoegsel;
    }

    public function getAchternaam()
    {
        return $this->achternaam;
    }

    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    }

    public function getNaam()
    {
        return "$this->voornaam $this->tussenvoegsel $this->achternaam";
    }

    public function getAdres()
    {
        return $this->adres;
    }

    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    public function setWoonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;
    }

    public function getRoles()
    {
        $roles = ['ROLE_BEZOEKER'];
        if($this->is_member)
        {
            $roles = ['ROLE_USER'];
        }
        if($this->is_instructeur)
        {
            $roles = ['ROLE_INSTRUCTEUR'];
        }

        return $roles;
    }

    public function getUsername()
    {
        return $this->gebruikersnaam;
    }

    public function setUsername($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    public function getPassword()
    {
        return $this->wachtwoord;
    }

    public function setPassword($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
    }

    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }

    public function setGeboortedatum($geboortedatum)
    {
        $this->geboortedatum = $geboortedatum;
    }

    public function getSalaris()
    {
        return $this->salaris;
    }

    public function setSalaris($salaris)
    {
        return $this->salaris = $salaris;
    }
    public function getStartdatum()
    {
        return $this->startdatum;
    }
    public function setStartdatum($startdatum)
    {
        $this->startdatum = $startdatum;
    }
    public function getPersoonsnummer()
    {
        return $this->persoonsnummer;
    }
    public function setPersoonsnummer($persoonsnummer)
    {
        $this->persoonsnummer = $persoonsnummer;

    }

    /**
     * @return mixed
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }

    /**
     * @param mixed $gebruikersnaam
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    /**
     * @return mixed
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }

    /**
     * @param mixed $wachtwoord
     */
    public function setWachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
    }

    /**
     * @return mixed
     */
    public function getisMember()
    {
        return $this->is_member;
    }

    /**
     * @param mixed $is_member
     */
    public function setIsMember($is_member)
    {
        $this->is_member = $is_member;
    }

    /**
     * @return mixed
     */
    public function getisInstructeur()
    {
        return $this->is_instructeur;
    }

    /**
     * @param mixed $is_instructeur
     */
    public function setIsInstructeur($is_instructeur)
    {
        $this->is_instructeur = $is_instructeur;
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
