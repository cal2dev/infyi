<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoginData
 *
 * @ORM\Table(name="login_data")
 * @ORM\Entity
 */
class LoginData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="login_data_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $loginDataId;

    /**
     * @var integer
     *
     * @ORM\Column(name="data_id", type="integer", nullable=false)
     */
    private $dataId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_hash", type="string", length=120, nullable=false)
     */
    private $recordhash;

    /**
     * @var string
     *
     * @ORM\Column(name="cookie_hash", type="string", length=120, nullable=false)
     */
    private $cookieHash;

    /**
     * @var string
     *
     * @ORM\Column(name="sess_id", type="string", length=120, nullable=true)
     */
    private $sessId;

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
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=200, nullable=true)
     */
    private $remark;

    public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }
    /**
     * Get loginDataId
     *
     * @return integer
     */
    public function getLoginDataId()
    {
        return $this->loginDataId;
    }

    /**
     * Set dataId
     *
     * @param integer $dataId
     *
     * @return LoginData
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;

        return $this;
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
     * Set recordhash
     *
     * @param string $recordhash
     *
     * @return LoginData
     */
    public function setRecordhash($recordhash)
    {
        $this->recordhash = $recordhash;

        return $this;
    }

    /**
     * Get recordhash
     *
     * @return string
     */
    public function getRecordhash()
    {
        return $this->recordhash;
    }

    /**
     * Set cookieHash
     *
     * @param string $cookieHash
     *
     * @return LoginData
     */
    public function setCookieHash($cookieHash)
    {
        $this->cookieHash = $cookieHash;

        return $this;
    }

    /**
     * Get cookieHash
     *
     * @return string
     */
    public function getCookieHash()
    {
        return $this->cookieHash;
    }

    /**
     * Set sessId
     *
     * @param string $sessId
     *
     * @return LoginData
     */
    public function setSessId($sessId)
    {
        $this->sessId = $sessId;

        return $this;
    }

    /**
     * Get sessId
     *
     * @return string
     */
    public function getSessId()
    {
        return $this->sessId;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return LoginData
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
     * @return LoginData
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
     * Set remark
     *
     * @param string $remark
     *
     * @return LoginData
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }
}

