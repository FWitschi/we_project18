<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 09.06.18
 * Time: 16:34
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
    <form action="/controller/deleteusercontroller.php" method="post" id="login-form">
        <h1>DELETE PROJECT</h1>
        <p>Press OK to permanently delete your account</p>
        <p>
            <button class="btn btn-primary" type="submit">OK</button>
        </p>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>