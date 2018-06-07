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
    <form id="createproject-form">
        <p class="newproject-paragraph">
            <label>First name</label>
        </p>
        <input class="form-control" type="text" placeholder="First name">
        <p class="newproject-paragraph">
            <label>Last name</label>
        </p>
        <input class="form-control" type="text" placeholder="Last name">
        <p class="newproject-paragraph">
            <label>Email</label>
        </p>
        <input class="form-control" type="email" placeholder="Email">
        <p class="newproject-paragraph">
            <label>Password</label>
        </p>
        <input class="form-control" type="password" placeholder="Password">
        <p class="text-center newproject-paragraph">
            <button class="btn btn-primary" type="button">Save Changes</button>
        </p>
    </form>
</div>

<?php include 'userfooter.php' ; ?>