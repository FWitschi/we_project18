<?php

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
<div id="login-div">
    <form id="login-form" action="../controller/sendemailcontroller.php" method="post">
        <h1>Reset Password</h1>
        <p>Enter your email to reset your password</p>
        <input class="form-control" name="email" type="email" required="" placeholder="Email">
        <p>
            <button class="btn btn-primary" type="submit">RESET</button>
        </p>
    </form>
</div>

<?php include 'landingfooter.php'; ?>