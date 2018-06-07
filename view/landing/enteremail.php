<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 21:59
 */



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body id="base-div">
<div id="login-div">
    <form action="enteremail.php" method="post" id="login-form">
        <h1>Reset Password</h1>
        <p>Enter your email to reset your password</p>
        <input class="form-control" type="email" required="" placeholder="Email">
        <p>
            <button class="btn btn-primary" type="submit">SEND</button>
        </p>
    </form>
</div>

<?php include 'landingfooter.php' ; ?>