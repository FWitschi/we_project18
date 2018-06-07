<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 07.06.18
 * Time: 20:26
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
    <form id="login-form" action="/own_we_project18/controller/resetpasswordcontroller.php" method="post">
        <h1>Reset password</h1>
        <label></label>
        <input class="form-control" type="text" required="" placeholder="Enter your answer here" minlength="4">
        <input class="form-control" type="password" required="" placeholder="Password (at least 4 characters)" minlength="4">
        <input class="form-control" type="password" required="" placeholder="Repeat password">
        <p>
            <button class="btn btn-primary" type="submit">RESET</button>
        </p>
    </form>
</div>

<?php include 'landingfooter.php' ; ?>