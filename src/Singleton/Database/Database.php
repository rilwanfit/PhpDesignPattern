<?php
/**
 * Created by PhpStorm.
 * User: mhrilwan
 * Date: 12/12/15
 * Time: 9:47 AM
 */

namespace PDP\Singleton\Database;


class Database
{
    /**
     * Which holds the reference to an already created object
     *
     * @var null
     */
    private static $instance = null;

    /**
     * Private construct prevent object creation using the new keyword.
     *
     * @param DbConfig $dbConfig
     */
    private function __construct($dbConfig)
    {
        new \PDO(
            $dbConfig->getDns(),
            $dbConfig->getUser(),
            $dbConfig->getPass()
        );
    }

    public static function connect(DbConfig $dbConfig)
    {
        if (is_null(self::$instance)) {
            self::$instance = new Database($dbConfig);
        }
        return self::$instance;
    }

    private function __clone()
    {
        // Stopping cloning of object
    }
    private function __wakeup()
    {
        // Stopping unserialize of object
    }
}