<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 08.06.18
 * Time: 10:43
 */

require_once('../database/Database.php');
require_once('../doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

function getProjects() {
    return ProjectDOA::getAllProjects($_COOKIE['user_id'], Database::connect());
}