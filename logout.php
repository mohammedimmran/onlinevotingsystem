<?php

    session_start();

    

    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();

    header("Location:index.php");

?>