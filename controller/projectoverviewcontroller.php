<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 08.06.18
 * Time: 00:06
 */

require_once ('../model/database/Database.php');
require_once ('../model/doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

function getProjects() {
    return ProjectDOA::getAllProjects(Database::connect());
}