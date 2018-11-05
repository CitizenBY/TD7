<?php
    include "./services/UserService.php";

    logout();
    session_destroy();
    header('Location: index.php');
    exit();
?>