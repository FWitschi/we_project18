<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 09.06.18
 * Time: 17:08
 */

require_once('../model/database/Database.php');
require_once('../model/doa/UserDOA.php');

use database\Database;
use doa\UserDOA;

setcookie("user_id", 3);

if (UserDOA::deleteUser($_COOKIE['user_id'], Database::connect())) {
    header("Location: http://localhost/own_we_project18/view/landing/login.php");
}