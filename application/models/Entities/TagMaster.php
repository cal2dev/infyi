<?php

namespace Entities;

/**
 * TagMaster
 */
class TagMaster
{
    /**
     * @var integer
     */
    private $tagId;

    /**
     * @var string
     */
    private $tagName;

    /**
     * @var string
     */
    private $tagdhash;

    /**
     * @var string
     */
    private $tagdSlug;

    /**
     * @var \DateTime
     */
    private $cstamp;

    /**
     * @var \DateTime
     */
    private $ustamp;

	public function __construct() {
    	$this->ustamp  = new \DateTime();
    	$this->cstamp  = new \DateTime();
    }

    /**
     * Get tagId
     *
     * @return integer
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set tagName
     *
     * @param string $tagName
     *
     * @return TagMaster
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    
        return $this;
    }

    /**
     * Get tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set tagdhash
     *
     * @param string $tagdhash
     *
     * @return TagMaster
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
     * Set tagdSlug
     *
     * @param string $tagdSlug
     *
     * @return TagMaster
     */
    public function setTagdSlug($tagdSlug)
    {
        $this->tagdSlug = $tagdSlug;
    
        return $this;
    }

    /**
     * Get tagdSlug
     *
     * @return string
     */
    public function getTagdSlug()
    {
        return $this->tagdSlug;
    }

    /**
     * Set cstamp
     *
     * @param \DateTime $cstamp
     *
     * @return TagMaster
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
     * @return TagMaster
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
}

