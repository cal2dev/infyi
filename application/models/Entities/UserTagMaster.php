<?php

namespace Entities;

/**
 * UserTagMaster
 */
class UserTagMaster
{
    /**
     * @var integer
     */
    private $userTagId;

    /**
     * @var string
     */
    private $tagdhash;

    /**
     * @var string
     */
    private $userHash;

    /**
     * @var \DateTime
     */
    private $cstamp;

    /**
     * @var \DateTime
     */
    private $ustamp;

    /**
     * @var \Entities\UserData
     */
    private $UserDataId;

    /**
     * @var \Entities\TagMaster
     */
    private $tagId;

	public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }

    /**
     * Get userTagId
     *
     * @return integer
     */
    public function getUserTagId()
    {
        return $this->userTagId;
    }

    /**
     * Set tagdhash
     *
     * @param string $tagdhash
     *
     * @return UserTagMaster
     */
    public function setTagdhash($tagdhash)
    {
        $this->tagdhash = $tagdhash;
    
        return $this;
    }

    /**
     * Get tagdhash
     *
     * @return string
     */
    public function getTagdhash()
    {
        return $this->tagdhash;
    }

    /**
     * Set userHash
     *
     * @param string $userHash
     *
     * @return UserTagMaster
     */
    public function setUserHash($userHash)
    {
        $this->userHash = $userHash;
    
        return $this;
    }

    /**
     * Get userHash
     *
     * @return string
     */
    public function getUserHash()
    {
        return $this->userHash;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return UserTagMaster
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
     * @return UserTagMaster
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
     * Set userDataId
     *
     * @param \Entities\UserData $userDataId
     *
     * @return UserTagMaster
     */
    public function setUserDataId(\Entities\UserData $userDataId = null)
    {
        $this->UserDataId = $userDataId;
    
        return $this;
    }

    /**
     * Get userDataId
     *
     * @return \Entities\UserData
     */
    public function getUserDataId()
    {
        return $this->UserDataId;
    }

    /**
     * Set tagId
     *
     * @param \Entities\TagMaster $tagId
     *
     * @return UserTagMaster
     */
    public function setTagId(\Entities\TagMaster $tagId = null)
    {
        $this->tagId = $tagId;
    
        return $this;
    }

    /**
     * Get tagId
     *
     * @return \Entities\TagMaster
     */
    public function getTagId()
    {
        return $this->tagId;
    }
}

