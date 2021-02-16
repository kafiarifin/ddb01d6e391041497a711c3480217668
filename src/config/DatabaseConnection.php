<?php

namespace Config;

/**
 * Class Database Service - represent the Connection
 * PHP version 7
 *
 * @category Class
 * @author   Kafi Airifin - <kafi.arifin.r.a@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License V3.0
 * @link     http://www.hashbangcode.com/
 */
class DatabaseConnection
{

    /**
     * Connection
     * @var type
     */
    private static $conn;

    /**
     * Connect to the database and return an instance of \PDO object
     * @return \PDO
     * @throws \Exception
     */
    public function connect()
    {

        // read parameters in the ini configuration file
        $params = parse_ini_file('database.ini');
        if ($params === false) {
            throw new \Exception("Error reading database configuration file, please check the file");
        }
        // connect to the postgresql database
        $conStr = 'pgsql:' .
            'host=' . $params['host'] . ';' .
            'port=' . $params['port'] . ';' .
            'dbname=' . $params['database'] . ';' .
            'user=' . $params['user'] . ';' .
            'password=' . $params['password']
        ;

        $pdo = new \PDO($conStr);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    /**
     * return an instance of the Connection object
     * @return type
     */
    public static function get()
    {
        if (null === static::$conn) {
            static::$conn = new static();
        }

        return static::$conn;
    }

    protected function __construct()
    {
        # construct code
    }

    private function __clone()
    {
        # clone code
    }

    private function __wakeup()
    {
        # wakeup code
    }
}
