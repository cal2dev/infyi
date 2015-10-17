<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRegister
 *
 * @ORM\Table(name="user_register")
 * @ORM\Entity
 */
class UserRegister
{
    /**
     * @var integer
     *
     * @ORM\Column(name="register_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $registerId;

    /**
     * @var string
     *
     * @ORM\Column(name="unique_id", type="string", length=120, nullable=true)
     */
    private $uniqueId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_hash", type="string", length=120, nullable=true)
     */
    private $recordHash;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=120, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=120, nullable=false)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=120, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=false)
     */
    private $lastname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reg_active", type="boolean", nullable=false)
     */
    private $regActive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reg_status", type="integer", nullable=false)
     */
    private $regStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_now", type="string", length=100, nullable=true)
     */
    private $regNow;

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

    public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }
    /**
     * Get registerId
     *
     * @return integer
     */
    public function getRegisterId()
    {
        return $this->registerId;
    }

    /**
     * Set uniqueId
     *
     * @param string $uniqueId
     *
     * @return UserRegister
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
     * Set recordHash
     *
     * @param string $recordHash
     *
     * @return UserRegister
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
     * Set userName
     *
     * @param string $userName
     *
     * @return UserRegister
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
     * @return UserRegister
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
     * @return UserRegister
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
     * @return UserRegister
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
     * @return UserRegister
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
     * Set regActive
     *
     * @param boolean $regActive
     *
     * @return UserRegister
     */
    public function setRegActive($regActive)
    {
        $this->regActive = $regActive;

        return $this;
    }

    /**
     * Get regActive
     *
     * @return boolean
     */
    public function getRegActive()
    {
        return $this->regActive;
    }

    /**
     * Set regStatus
     *
     * @param integer $regStatus
     *
     * @return UserRegister
     */
    public function setRegStatus($regStatus)
    {
        $this->regStatus = $regStatus;

        return $this;
    }

    /**
     * Get regStatus
     *
     * @return integer
     */
    public function getRegStatus()
    {
        return $this->regStatus;
    }

    /**
     * Set regNow
     *
     * @param string $regNow
     *
     * @return UserRegister
     */
    public function setRegNow($regNow)
    {
        $this->regNow = $regNow;

        return $this;
    }

    /**
     * Get regNow
     *
     * @return string
     */
    public function getRegNow()
    {
        return $this->regNow;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return UserRegister
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
     * @return UserRegister
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
    

    /***************************
     Manual code for mapping
     /**************************/
    
    public function addUserData(Userdata $userData)
    {
    	$userData->setRegister($this); // synchronously updating inverse side
    }
    
}

