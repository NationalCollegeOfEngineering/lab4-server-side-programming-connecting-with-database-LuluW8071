<?php
    session_start();
    $_SESSION["is_login"] = '';
    session_destroy();
    header("Location: /home/index.php");
?>