<?php include './templates/header.php'; ?>
<div class="container h-100 justify-content-center">
    <h2>Login</h2>
    <form action="../index.php" name="login" method="post">
        <input type="hidden" name="form_action" value="login">
        <div class="form-group">
            <label for="login-email">Email</label>
            <input id="login-email" class="form-control" type="email" name="email">

            <label for="login-pass">Password</label>
            <input id="login-pass" class="form-control" type="password" name="password">

            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>
    <form action="../index.php" method="post">
        <input type="hidden" name="form_action" value="display_registration">
        <input class="btn btn-primary" type="submit" value="Register now!">
    </form>


</div>
<?php include './templates/footer.php'; ?>