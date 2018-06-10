<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 10.06.18
 * Time: 15:32
 */

session_destroy();

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = "view/landing/login.php";
header("Location: http://$host$uri/$extra");