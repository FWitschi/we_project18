<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 09.06.18
 * Time: 17:12
 */

require_once('../database/Database.php');
require_once('../doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

setcookie('selected_project_id', 0);

if (isset($_POST)) {
    if ($_POST['P_OWNER'] != "") {
        ProjectDOA::updateProject($_COOKIE['selected_project_id'], "P_OWNER", $_POST['P_OWNER'], Database::connect());
    }
    if ($_POST['PROJECT_NAME'] != "") {
        ProjectDOA::updateProject($_COOKIE['selected_project_id'], "PROJECT_NAME", $_POST['PROJECT_NAME'], Database::connect());
    }
    if ($_POST['PROJECT_DESCRIPTION'] != "") {
        ProjectDOA::updateProject($_COOKIE['selected_project_id'], "PROJECT_DESCRIPTION", $_POST['PROJECT_DESCRIPTION'], Database::connect());
    }
    if ($_POST['P_EMPLOYEES'] != "") {
        ProjectDOA::updateProject($_COOKIE['selected_project_id'], "P_EMPLOYEES", $_POST['P_EMPLOYEES'], Database::connect());
    }
    if ($_POST['P_STARTDATE'] != "") {
        ProjectDOA::updateProject($_COOKIE['selected_project_id'], "P_STARTDATE", $_POST['P_STARTDATE'], Database::connect());
    }
    if ($_POST['P_DURATION'] != "") {
        ProjectDOA::updateProject($_COOKIE['selected_project_id'], "P_DURATION", $_POST['P_DURATION'], Database::connect());
    }
    $host = $_SERVER['HTTP_HOST'];
    $extra = "../view/projectoverview.php";
    header("Location: http://$host$uri/$extra");
} else {

}