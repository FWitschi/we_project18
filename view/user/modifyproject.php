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
    <form action="/own_we_project18/controller/editprojectcontroller.php" id="createproject-form">
        <p class="newproject-paragraph">
            <label>Project Name</label>
        </p>
        <input class="form-control" type="text" placeholder="Enter a suitable project name">
        <p class="newproject-paragraph">
            <label>Project Description</label>
        </p>
        <textarea class="form-control" rows="10" cols="1" placeholder="Enter a comprehensive description of this project"></textarea>
        <p class="newproject-paragraph">
            <label>Add User</label>
        </p>
        <input class="form-control" type="text" placeholder="Add users working on this project">
        <p id="adduser-button" class="newproject-paragraph">
        <button class="btn btn-primary" onclick="addUser()" type="button">Add User</button>
        </p>
        <p class="newproject-paragraph">
            <label>Starting Date</label>
        </p>
        <input class="form-control" name="startdate" type="date" placeholder="Enter the starting date for this project" min="0" step="0.5">
        <p class="newproject-paragraph">
            <label>Total Time Planned</label>
        </p>
        <input class="form-control" type="number" placeholder="Enter the total time scheduled for this project" min="0" step="0.5">
        <p class="text-center newproject-paragraph">
            <button class="btn btn-primary" type="submit">Change Properties</button>
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