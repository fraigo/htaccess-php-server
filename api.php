<?php

@list($PATH, $QUERY) = explode("?",$_SERVER["REQUEST_URI"]);

if ($PATH=="/something"){
    //doSomething();
    return;
}

header("HTTP/1.0 404 Not found");
