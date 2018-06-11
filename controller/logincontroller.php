<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 22:38
 */

require_once('../database/Database.php');
require_once('../doa/UserDOA.php');

use database\Database;
use doa\UserDOA;

if (UserDOA::verifyUser($_POST['email'], $_POST['password'], Database::connect())) {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "../view/projectoverview.php";
    header("Location: http://$host$uri/$extra");
} else {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "../view/wrongcredentials.php";
    header("Location: http://$host$uri/$extra");
}