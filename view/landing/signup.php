<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 05.06.18
 * Time: 18:13
 */

include 'landingheader.php';

?>

<div id="signup-div" style="height:100%;">
    <form id="signup-form" action="/controller/signupcontroller.php" method="post">
        <h1>Sign up</h1>
        <input class="form-control" type="text" required="" name="firstname" placeholder="First name">
        <input class="form-control" type="text" required="" name="lastname" placeholder="Last name">
        <input class="form-control" type="email" required="" name="email" placeholder="E-Mail">
        <input class="form-control" type="password" required="" name="password" placeholder="Password (at least 4 characters)" minlength="4">
        <input class="form-control" type="password" required="" name="passwordRep" placeholder="Repeat password" minlength="4">
        <p><button class="btn btn-primary" type="submit">SIGN UP</button></p>
    </form>
</div>

<?php include 'landingfooter.php' ; ?>