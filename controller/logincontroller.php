<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 22:38
 */

require_once ('../model/database/Database.php');
require_once ('../model/doa/UserDOA.php');

use database\Database;
use doa\UserDOA;

if (UserDOA::verifyUser($_POST['email'], $_POST['password'], Database::connect())) {
    $extra = 'view/user/projectoverview.php';
    header("Location: http://localhost/final-we-project18/$extra");
} else {
    echo "NOT A USER";
}