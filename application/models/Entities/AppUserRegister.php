<?php

namespace Entities;

/**
 * AppUserRegister
 */
class AppUserRegister
{
    /**
     * @var integer
     */
    private $regId;

    /**
     * @var string
     */
    private $regUniqueId;

    /**
     * @var string
     */
    private $regRecordhash;

    /**
     * @var string
     */
    private $regUserName;

    /**
     * @var string
     */
    private $regEmailId;

    /**
     * @var string
     */
    private $regPassword;

    /**
     * @var string
     */
    private $regFirstname;

    /**
     * @var string
     */
    private $regLastname;

    /**
     * @var boolean
     */
    private $regActive = '0';

    /**
     * @var integer
     */
    private $regStatus = '0';

    /**
     * @var integer
     */
    private $regUnlogincount;

    /**
     * @var string
     */
    private $regNow;

    /**
     * @var \DateTime
     */
    private $regCstamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $regUstamp = 'CURRENT_TIMESTAMP';


    /**
     * Get regId
     *
     * @return integer
     */
    public function getRegId()
    {
        return $this->regId;
    }

    /**
     * Set regUniqueId
     *
     * @param string $regUniqueId
     *
     * @return AppUserRegister
     */
    public function setRegUniqueId($regUniqueId)
    {
        $this->regUniqueId = $regUniqueId;

        return $this;
    }

    /**
     * Get regUniqueId
     *
     * @return string
     */
    public function getRegUniqueId()
    {
        return $this->regUniqueId;
    }

    /**
     * Set regRecordhash
     *
     * @param string $regRecordhash
     *
     * @return AppUserRegister
     */
    public function setRegRecordhash($regRecordhash)
    {
        $this->regRecordhash = $regRecordhash;

        return $this;
    }

    /**
     * Get regRecordhash
     *
     * @return string
     */
    public function getRegRecordhash()
    {
        return $this->regRecordhash;
    }

    /**
     * Set regUserName
     *
     * @param string $regUserName
     *
     * @return AppUserRegister
     */
    public function setRegUserName($regUserName)
    {
        $this->regUserName = $regUserName;

        return $this;
    }

    /**
     * Get regUserName
     *
     * @return string
     */
    public function getRegUserName()
    {
        return $this->regUserName;
    }

    /**
     * Set regEmailId
     *
     * @param string $regEmailId
     *
     * @return AppUserRegister
     */
    public function setRegEmailId($regEmailId)
    {
        $this->regEmailId = $regEmailId;

        return $this;
    }

    /**
     * Get regEmailId
     *
     * @return string
     */
    public function getRegEmailId()
    {
        return $this->regEmailId;
    }

    /**
     * Set regPassword
     *
     * @param string $regPassword
     *
     * @return AppUserRegister
     */
    public function setRegPassword($regPassword)
    {
        $this->regPassword = $regPassword;

        return $this;
    }

    /**
     * Get regPassword
     *
     * @return string
     */
    public function getRegPassword()
    {
        return $this->regPassword;
    }

    /**
     * Set regFirstname
     *
     * @param string $regFirstname
     *
     * @return AppUserRegister
     */
    public function setRegFirstname($regFirstname)
    {
        $this->regFirstname = $regFirstname;

        return $this;
    }

    /**
     * Get regFirstname
     *
     * @return string
     */
    public function getRegFirstname()
    {
        return $this->regFirstname;
    }

    /**
     * Set regLastname
     *
     * @param string $regLastname
     *
     * @return AppUserRegister
     */
    public function setRegLastname($regLastname)
    {
        $this->regLastname = $regLastname;

        return $this;
    }

    /**
     * Get regLastname
     *
     * @return string
     */
    public function getRegLastname()
    {
        return $this->regLastname;
    }

    /**
     * Set regActive
     *
     * @param boolean $regActive
     *
     * @return AppUserRegister
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
     * @return AppUserRegister
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
     * Set regUnlogincount
     *
     * @param integer $regUnlogincount
     *
     * @return AppUserRegister
     */
    public function setRegUnlogincount($regUnlogincount)
    {
        $this->regUnlogincount = $regUnlogincount;

        return $this;
    }

    /**
     * Get regUnlogincount
     *
     * @return integer
     */
    public function getRegUnlogincount()
    {
        return $this->regUnlogincount;
    }

    /**
     * Set regNow
     *
     * @param string $regNow
     *
     * @return AppUserRegister
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
     * Set regCstamp
     *
     * @param \DateTime $regCstamp
     *
     * @return AppUserRegister
     */
    public function setRegCstamp($regCstamp)
    {
        $this->regCstamp = $regCstamp;

        return $this;
    }

    /**
     * Get regCstamp
     *
     * @return \DateTime
     */
    public function getRegCstamp()
    {
        return $this->regCstamp;
    }

    /**
     * Set regUstamp
     *
     * @param \DateTime $regUstamp
     *
     * @return AppUserRegister
     */
    public function setRegUstamp($regUstamp)
    {
        $this->regUstamp = $regUstamp;

        return $this;
    }

    /**
     * Get regUstamp
     *
     * @return \DateTime
     */
    public function getRegUstamp()
    {
        return $this->regUstamp;
    }
    
    /***************************
    Manual code for mapping
    /**************************/
    
    public function addUserData(AppUserdata $userData)
    {
    	$userData->setReg($this); // synchronously updating inverse side
    }
    
}
