<?php

    // session_id('r86v63oerbpapd2kq4d269skva');

    require_once("config.php");

    session_regenerate_id();

    echo session_id();
    echo "<br>";

    var_dump($_SESSION);

?>