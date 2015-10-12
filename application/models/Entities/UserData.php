<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserData
 *
 * @ORM\Table(name="user_data", indexes={@ORM\Index(name="data_id", columns={"data_id"})})
 * @ORM\Entity
 */
class UserData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_hash", type="string", length=120, nullable=true)
     */
    private $recordHash;

    /**
     * @var string
     *
     * @ORM\Column(name="unique_id", type="string", length=120, nullable=true)
     */
    private $uniqueId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=120, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=120, nullable=true)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=120, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="dob", type="string", length=100, nullable=true)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=100, nullable=true)
     */
    private $timezone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cstamp", type="datetime", nullable=false)
     */
    private $cstamp ;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ustamp", type="datetime", nullable=false)
     */
    private $ustamp ;

    /**
     * @var \Entities\UserRegister
     *
     * @ORM\OneToOne(targetEntity="Entities\UserRegister")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="register_id", referencedColumnName="register_id", unique=true)
     * })
     */
    private $register;

    public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }
    /**
     * Get dataId
     *
     * @return integer
     */
    public function getDataId()
    {
        return $this->dataId;
    }

    /**
     * Set recordHash
     *
     * @param string $recordHash
     *
     * @return UserData
     */
    public function setRecordHash($recordHash)
    {
        $this->recordHash = $recordHash;

        return $this;
    }

    /**
     * Get recordHash
     *
     * @return string
     */
    public function getRecordHash()
    {
        return $this->recordHash;
    }

    /**
     * Set uniqueId
     *
     * @param string $uniqueId
     *
     * @return UserData
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * Get uniqueId
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return UserData
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set emailId
     *
     * @param string $emailId
     *
     * @return UserData
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * Get emailId
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return UserData
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return UserData
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return UserData
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return UserData
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dob
     *
     * @param string $dob
     *
     * @return UserData
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return UserData
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return UserData
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return UserData
     */
    public function setCstamp($cstamp)
    {
        $this->cstamp = $cstamp;

        return $this;
    }

    /**
     * Get cstamp
     *
     * @return \DateTime
     */
    public function getCstamp()
    {
        return $this->cstamp;
    }

    /**
     * Set ustamp
     *
     * @param \DateTime $ustamp
     *
     * @return UserData
     */
    public function setUstamp($ustamp)
    {
        $this->ustamp = $ustamp;

        return $this;
    }

    /**
     * Get ustamp
     *
     * @return \DateTime
     */
    public function getUstamp()
    {
        return $this->ustamp;
    }

    /**
     * Set register
     *
     * @param \Entities\UserRegister $register
     *
     * @return UserData
     */
    public function setRegister(\Entities\UserRegister $register = null)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return \Entities\UserRegister
     */
    public function getRegister()
    {
        return $this->register;
    }
}

