<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 22:38
 */

require_once('../model/database/Database.php');
require_once('../model/doa/UserDOA.php');

use database\Database;
use doa\UserDOA;

if (UserDOA::verifyUser($_POST['email'], $_POST['password'], Database::connect())) {
    header("Location: http://localhost/own_we_project18/view/user/projectoverview.php");
} else {
    header("Location: http://localhost/own_we_project18/view/landing/wrongcredentials.php");
}