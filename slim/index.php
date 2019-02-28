<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){
    echo json_encode(array(
        'date'=>date("Y-m-d H:m:s")
    ));
});

// URL: http://localhost/learning_php/website/hello/alex
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>