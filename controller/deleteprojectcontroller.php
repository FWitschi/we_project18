<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 09.06.18
 * Time: 17:14
 */

require_once('../database/Database.php');
require_once('../doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

setcookie('selected_project_id', 0);

if (ProjectDOA::deleteProject($_COOKIE['selected_project_id'], Database::connect())) {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "../view/projectoverview.php";
    header("Location: http://$host$uri/$extra");
}