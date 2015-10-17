<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestKeys
 *
 * @ORM\Table(name="rest_keys")
 * @ORM\Entity
 */
class RestKeys
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="key_name", type="string", length=100, nullable=false)
     */
    private $keyName;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=40, nullable=false)
     */
    private $key;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ignore_limits", type="boolean", nullable=false)
     */
    private $ignoreLimits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_created", type="integer", nullable=false)
     */
    private $dateCreated;


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
     * Set keyName
     *
     * @param string $keyName
     *
     * @return RestKeys
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;

        return $this;
    }

    /**
     * Get keyName
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return RestKeys
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return RestKeys
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set ignoreLimits
     *
     * @param boolean $ignoreLimits
     *
     * @return RestKeys
     */
    public function setIgnoreLimits($ignoreLimits)
    {
        $this->ignoreLimits = $ignoreLimits;

        return $this;
    }

    /**
     * Get ignoreLimits
     *
     * @return boolean
     */
    public function getIgnoreLimits()
    {
        return $this->ignoreLimits;
    }

    /**
     * Set dateCreated
     *
     * @param integer $dateCreated
     *
     * @return RestKeys
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return integer
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}

