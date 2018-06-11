<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 05.06.18
 * Time: 17:47
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="base-div">

<nav class="navbar navbar-light navbar-expand-md" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="assets/img/timecatcher-icon.png" class="logo">
            <strong>&nbsp; Project Manager</strong>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="features.php">Features</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="pricing.php">pricing</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="login.php">Log in</a></li>
            </ul>
            <a class="btn btn-primary" role="button" href="signup.php">SIGN UP</a>
        </div>
    </div>
</nav>