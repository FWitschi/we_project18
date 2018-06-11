<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 20:05
 */

require_once('../database/Database.php');
require_once('../doa/UserDOA.php');

use database\Database;
use doa\UserDOA;

if (isset($_POST)) {
    if ($_POST['FIRST_NAME'] != "") {
        UserDOA::editUser($_COOKIE['user_id'], "FIRST_NAME", $_POST['FIRST_NAME'], Database::connect());
    }
    if ($_POST['LAST_NAME'] != "") {
        UserDOA::editUser($_COOKIE['user_id'], "LAST_NAME", $_POST['LAST_NAME'], Database::connect());
    }
    if ($_POST['EMAIL'] != "") {
        UserDOA::editUser($_COOKIE['user_id'], "EMAIL", $_POST['EMAIL'], Database::connect());
    }
    if ($_POST['PASSWORD'] != "") {
        UserDOA::editUser($_COOKIE['user_id'], "PASSWORD", $_POST['PASSWORD'], Database::connect());
    }
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "../view/projectoverview.php";
    header("Location: http://$host$uri/$extra");
} else {

}