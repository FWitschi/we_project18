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

if ($_POST['password'] == $_POST['passwordRep']) {
    UserDOA::registerUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], Database::connect());
    setcookie('email', $_POST['email']);
    header("Location: http://localhost/own_we_project18/view/user/projectoverview.php");
} else {
    echo "NOT SAME PASSWORD!";
}