<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
} else {
    if(time() - $_SESSION["timestamp"] > 1800) { //subtract new timestamp from the old one
        echo"<script>alert('Logged out due to inactivity');</script>";
        unset($_SESSION["username"], $_SESSION["password"], $_SESSION["timestamp"]);
        $_SESSION["logged_in"] = false;
        header("Location: index.php"); //redirect to index.php
        exit;
    } else {
        $_SESSION["timestamp"] = time(); //set new timestamp
    }
}
