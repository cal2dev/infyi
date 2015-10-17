<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestLogs
 *
 * @ORM\Table(name="rest_logs")
 * @ORM\Entity
 */
class RestLogs
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
     * @ORM\Column(name="uri", type="string", length=255, nullable=false)
     */
    private $uri;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=6, nullable=false)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="text", length=65535, nullable=true)
     */
    private $params;

    /**
     * @var string
     *
     * @ORM\Column(name="api_key", type="string", length=40, nullable=false)
     */
    private $apiKey;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=45, nullable=false)
     */
    private $ipAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false)
     */
    private $time = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     *
     * @ORM\Column(name="rtime", type="float", precision=10, scale=0, nullable=true)
     */
    private $rtime;

    /**
     * @var string
     *
     * @ORM\Column(name="authorized", type="string", length=1, nullable=false)
     */
    private $authorized;

    /**
     * @var integer
     *
     * @ORM\Column(name="response_code", type="smallint", nullable=false)
     */
    private $responseCode;


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
     * Set uri
     *
     * @param string $uri
     *
     * @return RestLogs
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set method
     *
     * @param string $method
     *
     * @return RestLogs
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set params
     *
     * @param string $params
     *
     * @return RestLogs
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     *
     * @return RestLogs
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get apiKey
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return RestLogs
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return RestLogs
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set rtime
     *
     * @param float $rtime
     *
     * @return RestLogs
     */
    public function setRtime($rtime)
    {
        $this->rtime = $rtime;

        return $this;
    }

    /**
     * Get rtime
     *
     * @return float
     */
    public function getRtime()
    {
        return $this->rtime;
    }

    /**
     * Set authorized
     *
     * @param string $authorized
     *
     * @return RestLogs
     */
    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;

        return $this;
    }

    /**
     * Get authorized
     *
     * @return string
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }

    /**
     * Set responseCode
     *
     * @param integer $responseCode
     *
     * @return RestLogs
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * Get responseCode
     *
     * @return integer
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
}

