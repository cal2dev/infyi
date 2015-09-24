<?php

namespace Doctrine\DBAL\Logging;

class Profiler implements SQLLogger
{
    public $start = null;

    private $ci;

    public function __construct()
    {
       
    }

    /**
     * {@inheritdoc}
     */
    public function startQuery($sql, array $params = null, array $types = null)
    {
        $this->start = microtime(true);
       
	//	log_message('error', $sql);
    }

    /**
     * {@inheritdoc}
     */
    public function stopQuery()
    {
       // microtime(true) - $this->start;
		
    }
}
