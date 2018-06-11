<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 23:30
 */

$to = $_POST['email'];
$subject = "Reset password";

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = "view/resetpassword.php";
$message = "
<html>
    <head>
        <title>Reset password</title>
    </head>
    <body>
        <p>You are seeing this email because you desire to reset your password; please click the following link to proceed</p>
        <a href='http:// . $host . $uri . / . $extra'>Click here to reset your password</a>
       </body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <projectmanager.we.18@gmail.com>' . "\r\n";

mail($to, $subject, $message, $headers);