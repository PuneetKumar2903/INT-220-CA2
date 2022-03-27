
<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $age =  $_POST["age"];
    $password = $_POST["password"];

    if ($username == "puneet kumar" && $password == "password") {
        echo " <h1><br>You have logged in successfully !!<h1> ";
        $_SESSION["username"]  = $username;
        echo "<h2>Your sessions are set !! </h2><br> ";
        require 'hyperlinks.php';
    } else {
        echo "<br><h2>Incorrect details <h2>";
        echo "<h2>Your sessions are not set <h2>";
        session_unset();
        session_destroy();
        require 'hyperlinks-2.php';
    }
}
?>