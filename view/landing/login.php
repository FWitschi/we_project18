<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 05.06.18
 * Time: 18:08
 */

include 'landingheader.php';

?>

<div id="login-div">
    <form id="login-form" action="/controller/logincontroller.php" method="post">
        <h1>log in</h1>
        <input class="form-control" name="email" type="text" required="" placeholder="E-Mail">
        <input class="form-control" name="password" type="password" required="" placeholder="Password">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="formCheck-1">
            <label class="form-check-label" for="formCheck-1">Stay logged in</label>
        </div>
        <p><button class="btn btn-primary" type="submit">LOG IN</button></p>
        <a href="enteremail.php">Forgot password?</a>
    </form>
</div>

<?php include 'landingfooter.php' ; ?>