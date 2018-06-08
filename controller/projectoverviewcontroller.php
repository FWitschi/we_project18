<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 08.06.18
 * Time: 10:43
 */

require_once('/Applications/MAMP/htdocs/own_we_project18/model/database/Database.php');
require_once('/Applications/MAMP/htdocs/own_we_project18/model/doa/ProjectDOA.php');

use database\Database;
use doa\ProjectDOA;

function getProjects() {
    return ProjectDOA::getAllProjects(Database::connect());
}