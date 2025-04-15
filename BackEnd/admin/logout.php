<?php
    session_start();
    $_SESSION["logged-in"] = false;
    $_SESSION["email"] = null;
    header("Location: ../");
    exit();
?>