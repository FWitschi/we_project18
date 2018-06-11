<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 05.06.18
 * Time: 17:01
 */

session_start();

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

try {
    if (!isset($_SESSION['loggedin'])) {
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        $extra = 'view/login.php';
        header("Location: http://$host$uri/$extra");
    } else {
        $extra = 'view/projectoverview.php';
        header("Location: http://$host/$extra");
    }
} catch (HTTPException $exception) {
    echo "FAILED" . $exception->getMessage();
}