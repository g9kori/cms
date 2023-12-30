<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php
$username = "";
if (isset($_POST["submit"])) {
    // Process the form

    //validations
    $required_fields = array("username", "password");
    validate_presences($required_fields);


    if (empty($errors)) {
        // Attempt login

        $username = $_POST["username"];
        $password = $_POST["password"];
        $found_admin = attempt_login($username, $password);

        if ($found_admin) {
            // Success
            // Mark user as logged in
            $_SESSION["admin_id"] = $found_admin["id"];
            $_SESSION["username"] = $found_admin["username"];
            redirect_to("admin.php");
        } else {
            // Failure
            $_SESSION["message"] = "Username/password not found";
        }
    }
} else {
    // This is probably a GET request
}
?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">
    <div id="navigation">
        &nbsp;
    </div>
    <div id="page">
        <?php echo message(); ?>
        <?php echo form_errors($errors); ?>

        <h2>Login</h2>
        <form action="login.php" method="post">
            <p>
                <br>
                <label for="username" class="form-label fw-bold">Username: </label>
                <input type="text" name="username" class="form-control p-1" id="username"
                    value="<?php echo htmlentities($username) ?>">
            </p>
            <p>
                <label for="password" class="form-label fw-bold">Password: </label>
                <input type="password" name="password" class="form-control p-1" id="password" value="">
            </p>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-sm btn-outline-dark">
        </form>
    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>