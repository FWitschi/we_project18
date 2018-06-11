<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 21:39
 */

namespace database;

require_once('../config/Config.php');

use \PDO;
use config\Config;

class Database
{

    private static $pdo = null;

    protected function __construct()
    {
        try {
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            self::$pdo = new PDO(Config::pdoConfig("dsn"), Config::pdoConfig("user"), Config::pdoConfig("password"), $options);

        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
        }
    }
    public static function connect() {

        if (self::$pdo) {
            return self::$pdo;
        }

        new self();

        return self::$pdo;

    }
}