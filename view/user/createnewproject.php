<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 17:04
 */

include 'userheader.php';
include 'newprojectcontroller.php';

?>

<h1 class="menu-heading">Create new Project</h1>
<div>
    <form id="createproject-form" action="/final-we-project18/controller/newprojectcontroller.php" method="post">
        <p class="newproject-paragraph">
            <label>Project Owner</label>
        </p>
        <input class="form-control" name="projectowner" type="text" required="" placeholder="Enter the name of the project owner">
        <p class="newproject-paragraph">
            <label>Project Name</label>
        </p>
        <input class="form-control" name="projectname" type="text" required="" placeholder="Enter a suitable project name">
        <p class="newproject-paragraph">
            <label>Project Description</label>
        </p>
        <textarea class="form-control" name="projectdescrip" rows="10" cols="1" required="" placeholder="Enter a comprehensive description of this project">

        </textarea>
        <p class="newproject-paragraph">
            <label>Add User</label>
        </p>
        <input id="users" class="form-control" name="users" type="text" required="" placeholder="Add users working on this project">
        <p id="adduser-button" class="newproject-paragraph">
            <button class="btn btn-primary" onclick="addUser()" type="button">Add User</button>
        </p>
        <p class="newproject-paragraph">
            <label>Starting Date</label>
        </p>
        <input class="form-control" name="startdate" type="date" required="" placeholder="Enter the starting date for this project" min="0" step="0.5">
        <p class="newproject-paragraph">
            <label>Total Time Planned (Number in Weeks)</label>
        </p>
        <input class="form-control" name="timeplanned" type="number" required="" placeholder="Enter the total time scheduled for this project (number in weeks)" min="0" step="0.5">
        <p class="text-center newproject-paragraph">
            <button class="btn btn-primary"  type="submit">Create Project</button>
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