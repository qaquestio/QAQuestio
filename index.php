<?php
session_start();
if (!isset($_SESSION["username"])) {
    $lc = "";
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        if ($lc == "pt") {
            header("location: https://qaquest.io/pt.qaquest.php");
            exit();

        } else if ($lc == "de") {
            header("location: https://qaquest.io/de.qaquest.php");
            exit();
        } else {
            header("location: https://qaquest.io/en.qaquest.php");
            exit();
        }
    }
} else {

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        if ($lc == "pt") {
            header("location: https://qaquest.io/pt.start.php");
            exit();

        } else if ($lc == "de") {
            header("location: https://qaquest.io/de.start.php");
            exit();
        } else {
            header("location: https://qaquest.io/en.start.php");
            exit();
        }
    }
}