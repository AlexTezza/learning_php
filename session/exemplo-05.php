<?php

// http://php.net/manual/pt_BR/book.session.php

    require_once("config.php");

    echo session_save_path();

    echo "<br>";
    
    var_dump(session_status());
    
    echo "<br>";

    switch(session_status()) {
        case PHP_SESSION_DISABLED:
            echo "As sessões estiverem desabilitadas";
            break;
        case PHP_SESSION_DISABLED:
            echo "As sessões estiverem habilitadas, mas nenhuma existir";
            break;
        default:
            echo "As sessões estiverem habilitadas, e uma existir";
    }

?>