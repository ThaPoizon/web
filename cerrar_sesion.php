<?php
    session_start();
    session_destroy();
    header("location:Personal.php");
?>