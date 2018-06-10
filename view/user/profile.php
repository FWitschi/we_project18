<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 17:04
 */

include 'userheader.php';

?>

<h1 class="menu-heading">Profile</h1>
<div>
    <form id="createproject-form" action="/own_we_project18/controller/modifyusercontroller.php" method="post">
        <p class="newproject-paragraph">
            <label>First name</label>
        </p>
        <input class="form-control" name="FIRST_NAME" type="text" placeholder="First name">
        <p class="newproject-paragraph">
            <label>Last name</label>
        </p>
        <input class="form-control" name="LAST_NAME" type="text" placeholder="Last name">
        <p class="newproject-paragraph">
            <label>Email</label>
        </p>
        <input class="form-control" name="EMAIL" type="email" placeholder="Email">
        <p class="newproject-paragraph">
            <label>Password</label>
        </p>
        <input class="form-control" name="PASSWORD" type="password" placeholder="Password" minlength="4">
        <p class="text-center newproject-paragraph">
            <button class="btn btn-primary" type="submit">Save Changes</button>
        </p>
        <p class="text-center">
            <a class="btn btn-primary" role="button" href="/own_we_project18/view/user/questiondeleteuser.php">DELETE ACCOUNT</a>
        </p>
    </form>
</div>

<?php include 'userfooter.php' ; ?>