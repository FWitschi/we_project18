<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 16:52
 */

require_once('../model/database/Database.php');
require_once('../model/doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

if (ProjectDOA::addProject($_POST['projectname'], 1, $_POST['projectdescrip'], $_POST['startdate'], $_POST['timeplanned'], $_POST['projectowner'], $_POST['users'], Database::connect())) {
    $extra = 'view/user/projectoverview.php';
    header("Location: http://localhost/own_we_project18/$extra");
}