<?php include './templates/header.php'; ?>
<div class="container h-100 justify-content-center">
    <h2>Registration</h2>
    <form action="../index.php" name="registration" method="post">
        <input type="hidden" name="form_action" value="registration">
        <div class="form-group">
            <label for="reg-firstname">First name</label>
            <input id="reg-firstname" class="form-control" type="text" name="firstname">

            <label for="reg-lastname">Last name</label>
            <input id="reg-lastname" class="form-control" type="text" name="lastname">

            <label for="reg-birthday">Birthday</label>
            <input id="reg-birthday" class="form-control" type="date" name="birthday">

            <label for="reg-email">Email</label>
            <input id="reg-email" class="form-control" type="email" name="email">

            <label for="reg-pass">Password</label>
            <input id="reg-pass" class="form-control" type="password" name="password">

            <input class="btn btn-primary" type="submit" value="Register">
        </div>
    </form>
</div>
<?php include './templates/footer.php'; ?>

