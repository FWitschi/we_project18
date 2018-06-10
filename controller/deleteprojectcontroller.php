<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 09.06.18
 * Time: 17:14
 */

require_once('../model/database/Database.php');
require_once('../model/doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

setcookie('selected_project_id', 0);

if (ProjectDOA::deleteProject($_COOKIE['selected_project_id'], Database::connect())) {
    header("Location: http://localhost/own_we_project18/view/user/projectoverview.php");
}