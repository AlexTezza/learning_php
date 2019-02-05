<?php

    require_once("config.php");
 
    unset($_SESSION['nome']);

    echo $_SESSION['nome'];

    session_destroy();

?>