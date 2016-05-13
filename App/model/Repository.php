<?php
namespace App\Model;


class Repository
{
    private static $dsn;
    private static $user;
    private static $pwd;
    protected static $pdo = null;

    /**
     * Repository constructor.
     */
    public function __construct()
    {
        // Require database configuration
        $config = require_once CONFIG_ROOT_DIR . '/database.php';

        self::$dsn = 'mysql:host=' .
            $config['host']. ';port=' .
            $config['port'] . ';dbname=' .
            $config['dbname'];

        self::$user = $config['username'];
        self::$pwd = $config['password'];

        self::initializePdo();
    }

    /**
     * Initialize PDO Instance
     */
    private static function initializePdo()
    {
        self::$pdo = new \PDO(self::$dsn,
            self::$user,
            self::$pwd);
        var_dump(self::$pdo);
    }
}