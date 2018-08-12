<?php

$PATH=$_SERVER["PATH_INFO"];

if ($PATH=="/something"){
    //doSomething();
    return;
}

header("HTTP/1.0 404 Not found");
