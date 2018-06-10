<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 09.06.18
 * Time: 16:02
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

<body id="home-div">
<p></p>
<h1 class="text-left menu-heading">Modify Project</h1>
<div>
    <form action="/controller/editprojectcontroller.php" id="createproject-form" method="post">
        <p class="newproject-paragraph">
            <label>Change Project Owner (Remember: Name has to be unique)</label>
        </p>
        <input class="form-control" name="P_OWNER" type="text" placeholder="Change project owner">
        <p class="newproject-paragraph">
            <label>Project Name</label>
        </p>
        <input class="form-control" name="PROJECT_NAME" type="text" placeholder="Change project name">
        <p class="newproject-paragraph">
            <label>Project Description</label>
        </p>
        <textarea class="form-control" name="PROJECT_DESCRIPTION" rows="10" cols="1" placeholder="Change project description"></textarea>
        <p class="newproject-paragraph">
            <label>Change Users</label>
        </p>
        <input class="form-control" name="P_EMPLOYEES" type="text" placeholder="Change users working on this project">
        <p id="adduser-button" class="newproject-paragraph">
        <button class="btn btn-primary" onclick="addUser()" type="button">Add User</button>
        </p>
        <p class="newproject-paragraph">
            <label>Change Starting Date</label>
        </p>
        <input class="form-control" name="P_STARTDATE" type="date" placeholder="Change starting date" min="0" step="0.5">
        <p class="newproject-paragraph">
            <label>Change Total Time Planned</label>
        </p>
        <input class="form-control" type="P_DURATION" placeholder="Change total time scheduled" min="0" step="0.5">
        <p class="text-center newproject-paragraph">
            <button class="btn btn-primary" type="submit">Change Properties</button>
        </p>
        <p class="text-center newproject-paragraph">
            <a class="btn btn-primary" role="button" href="/view/user/questiondeleteproject.php">DELETE PROJECT</a>
        </p>
    </form>
</div>

<script>
    function addUser() {
        var text = document.getElementById("users");
        text.value += "; ";
    }
</script>

<?php include 'userfooter.php' ; ?>