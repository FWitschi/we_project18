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

        $dsn = 'mysql:dbname=heroku_70032b0b9bd25ea;host=us-cdbr-iron-east-04.cleardb.net';
        $user = 'b1cbfe7ad9431b';
        $password = 'fe8dadf0';

        try {
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            self::$pdo = new PDO($dsn, $user, $password, $options);

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