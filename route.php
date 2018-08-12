<?php
    chdir("..");
    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    if (!file_exists($path)){
      chdir("backend");
      include "api.php";
    } else {
      return false;
    }
?>
