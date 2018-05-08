<?php
require("../../database/connection.php");
$username = $email = $password = "";
$commonErr = $usernameErr = $emailErr = $passwordErr = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //TODO: validate all fields
    //Validate username

    if ($username && $email && $password) {
        $sql = "INSERT INTO `user` (username, email, password) VALUES ('" . $username . "', '" . $email . "', '" . $password . "')";
        if (mysql_query($sql) == true) {
            header('Location: ../../index.php?view=home');
        } else {
            $commonErr = "Fail sql";
        }

    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" href="../../assets/img/icon/photo-camera.png">

    <!--Bootstrap v4.1.0 CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>My Photo</title>
</head>
<body>
<div class="container-fluid">
    <div class="register-page row align-items-center">
        <div class="register-left">
            <div class="row align-items-center">
                <img src="../../assets/img/icon/photo-camera.svg" width="120" height="60">
                <h3>My Photo</h3>
            </div>
        </div>
        <div class="register-right">
            <div class="text-center">
                <h1>Register</h1>
                <label>Already have an account? </label><label class="text-muted"><a href="#">Login</a></label>
                <p><?php echo $commonErr;?></p>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" name="loginSubmit" class="btn btn-warning">Register</button>
                </div>
            </form>
            <div class="text-center">
                <small>By joining, you agree to the Terms and Privacy Policy.</small>
            </div>
        </div>
    </div>

</div>


<!--Bootstrap v4.1.0 JS, Popper.js, and jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>
</html>