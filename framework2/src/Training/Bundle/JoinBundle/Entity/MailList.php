<?php

namespace Training\Bundle\JoinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailList
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MailList
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
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="state_code", type="string", length=10)
     */
    private $stateCode;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_postal", type="string", length=25)
     */
    private $zipPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="string", length=255)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="interests", type="string", length=255)
     */
    private $interests;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tours", type="string", length=10)
     */
    private $numTours;


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
     * Set firstName
     *
     * @param string $firstName
     * @return MailList
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return MailList
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return MailList
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return MailList
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set stateCode
     *
     * @param string $stateCode
     * @return MailList
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * Get stateCode
     *
     * @return string 
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Set zipPostal
     *
     * @param string $zipPostal
     * @return MailList
     */
    public function setZipPostal($zipPostal)
    {
        $this->zipPostal = $zipPostal;

        return $this;
    }

    /**
     * Get zipPostal
     *
     * @return string 
     */
    public function getZipPostal()
    {
        return $this->zipPostal;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return MailList
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MailList
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return MailList
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set interests
     *
     * @param string $interests
     * @return MailList
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Get interests
     *
     * @return string 
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Set numTours
     *
     * @param string $numTours
     * @return MailList
     */
    public function setNumTours($numTours)
    {
        $this->numTours = $numTours;

        return $this;
    }

    /**
     * Get numTours
     *
     * @return string 
     */
    public function getNumTours()
    {
        return $this->numTours;
    }
}
