<?php
use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\Common\Cache\ArrayCache,
    Doctrine\DBAL\Logging\EchoSQLLogger,
	Doctrine\DBAL\Logging\Profiler;

class Doctrine {

    public $em = null;

    public function __construct()
    {
        // load database configuration from CodeIgniter
        require APPPATH.'config/database.php';

        // Set up class loading. You could use different autoloaders, provided by your favorite framework,
        // if you want to.
        //require_once APPPATH.'libraries/Doctrine/Common/ClassLoader.php';

        // We use the Composer Autoloader instead - just set
        // $config['composer_autoload'] = TRUE; in application/config/config.php
        //require_once APPPATH.'vendor/autoload.php';

        //A Doctrine Autoloader is needed to load the models
        $entitiesClassLoader = new ClassLoader('Entities', APPPATH."models");
        $entitiesClassLoader->register();

        // Set up caches
        $config = new Configuration;
        $cache = new ArrayCache;
        $config->setMetadataCacheImpl($cache);
        $driverImpl = $config->newDefaultAnnotationDriver(array(APPPATH.'models/Entities'));
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCacheImpl($cache);

		
        $config->setQueryCacheImpl($cache);

        // Proxy configuration
        $config->setProxyDir(APPPATH.'/models/proxies');
        $config->setProxyNamespace('Proxies');

        // Set up logger
      //  $logger = new EchoSQLLogger;
     //   $config->setSQLLogger($logger);
        $logger = new Profiler;
        $config->setSQLLogger($logger);

        $config->setAutoGenerateProxyClasses( TRUE );
		
		//code to map - dev
		$driver = new \Doctrine\ORM\Mapping\Driver\PHPDriver(APPPATH.'models/Mappings');
		//$driver = new \Doctrine\ORM\Mapping\Driver\XMLDriver(APPPATH.'models/Mappings');
		$config->setMetadataDriverImpl($driver);

        // Database connection information
        $connectionOptions = array(
            'driver' => 'pdo_mysql',
            'user' =>     $db['default']['username'],
            'password' => $db['default']['password'],
            'host' =>     $db['default']['hostname'],
            'dbname' =>   $db['default']['database']
        );

        // Create EntityManager
        $this->em = EntityManager::create($connectionOptions, $config);
    }
}