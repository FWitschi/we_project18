<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 16:52
 */

require_once('../database/Database.php');
require_once('../doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

if (ProjectDOA::addProject($_POST['projectname'], $_COOKIE['user_id'], $_POST['projectdescrip'], $_POST['startdate'], $_POST['timeplanned'], $_POST['projectowner'], $_POST['users'], Database::connect())) {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "../view/projectoverview.php";
    header("Location: http://$host$uri/$extra");
}