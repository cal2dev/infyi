<?php

namespace Entities;

/**
 * AppUserData
 */
class AppUserData
{
    /**
     * @var integer
     */
    private $dataId;

    /**
     * @var string
     */
    private $regRecordhash;

    /**
     * @var string
     */
    private $regUniqueId;

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
    private $dataFirstname;

    /**
     * @var string
     */
    private $dataLastname;

    /**
     * @var string
     */
    private $dataImage;

    /**
     * @var string
     */
    private $dataGender;

    /**
     * @var string
     */
    private $dataBirthday;

    /**
     * @var string
     */
    private $dataLocation;

    /**
     * @var string
     */
    private $dataHometown;

    /**
     * @var string
     */
    private $dataRelationship;

    /**
     * @var string
     */
    private $dataTimezone;

    /**
     * @var \DateTime
     */
    private $regCstamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $regUstamp = 'CURRENT_TIMESTAMP';

    /**
     * @var \Entities\Entities.AppUserRegister
     */
    private $reg;


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
     * Set regRecordhash
     *
     * @param string $regRecordhash
     *
     * @return AppUserData
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
     * Set regUniqueId
     *
     * @param string $regUniqueId
     *
     * @return AppUserData
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
     * Set regUserName
     *
     * @param string $regUserName
     *
     * @return AppUserData
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
     * @return AppUserData
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
     * @return AppUserData
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
     * Set dataFirstname
     *
     * @param string $dataFirstname
     *
     * @return AppUserData
     */
    public function setDataFirstname($dataFirstname)
    {
        $this->dataFirstname = $dataFirstname;

        return $this;
    }

    /**
     * Get dataFirstname
     *
     * @return string
     */
    public function getDataFirstname()
    {
        return $this->dataFirstname;
    }

    /**
     * Set dataLastname
     *
     * @param string $dataLastname
     *
     * @return AppUserData
     */
    public function setDataLastname($dataLastname)
    {
        $this->dataLastname = $dataLastname;

        return $this;
    }

    /**
     * Get dataLastname
     *
     * @return string
     */
    public function getDataLastname()
    {
        return $this->dataLastname;
    }

    /**
     * Set dataImage
     *
     * @param string $dataImage
     *
     * @return AppUserData
     */
    public function setDataImage($dataImage)
    {
        $this->dataImage = $dataImage;

        return $this;
    }

    /**
     * Get dataImage
     *
     * @return string
     */
    public function getDataImage()
    {
        return $this->dataImage;
    }

    /**
     * Set dataGender
     *
     * @param string $dataGender
     *
     * @return AppUserData
     */
    public function setDataGender($dataGender)
    {
        $this->dataGender = $dataGender;

        return $this;
    }

    /**
     * Get dataGender
     *
     * @return string
     */
    public function getDataGender()
    {
        return $this->dataGender;
    }

    /**
     * Set dataBirthday
     *
     * @param string $dataBirthday
     *
     * @return AppUserData
     */
    public function setDataBirthday($dataBirthday)
    {
        $this->dataBirthday = $dataBirthday;

        return $this;
    }

    /**
     * Get dataBirthday
     *
     * @return string
     */
    public function getDataBirthday()
    {
        return $this->dataBirthday;
    }

    /**
     * Set dataLocation
     *
     * @param string $dataLocation
     *
     * @return AppUserData
     */
    public function setDataLocation($dataLocation)
    {
        $this->dataLocation = $dataLocation;

        return $this;
    }

    /**
     * Get dataLocation
     *
     * @return string
     */
    public function getDataLocation()
    {
        return $this->dataLocation;
    }

    /**
     * Set dataHometown
     *
     * @param string $dataHometown
     *
     * @return AppUserData
     */
    public function setDataHometown($dataHometown)
    {
        $this->dataHometown = $dataHometown;

        return $this;
    }

    /**
     * Get dataHometown
     *
     * @return string
     */
    public function getDataHometown()
    {
        return $this->dataHometown;
    }

    /**
     * Set dataRelationship
     *
     * @param string $dataRelationship
     *
     * @return AppUserData
     */
    public function setDataRelationship($dataRelationship)
    {
        $this->dataRelationship = $dataRelationship;

        return $this;
    }

    /**
     * Get dataRelationship
     *
     * @return string
     */
    public function getDataRelationship()
    {
        return $this->dataRelationship;
    }

    /**
     * Set dataTimezone
     *
     * @param string $dataTimezone
     *
     * @return AppUserData
     */
    public function setDataTimezone($dataTimezone)
    {
        $this->dataTimezone = $dataTimezone;

        return $this;
    }

    /**
     * Get dataTimezone
     *
     * @return string
     */
    public function getDataTimezone()
    {
        return $this->dataTimezone;
    }

    /**
     * Set regCstamp
     *
     * @param \DateTime $regCstamp
     *
     * @return AppUserData
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
     * @return AppUserData
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

    /**
     * Set reg
     *
     * @param \Entities\Entities.AppUserRegister $reg
     *
     * @return AppUserData
     */
    public function setReg(AppUserRegister $reg = null)
    {
        $this->reg = $reg;

        return $this;
    }

    /**
     * Get reg
     *
     * @return \Entities\Entities.AppUserRegister
     */
    public function getReg()
    {
        return $this->reg;
    }
}
