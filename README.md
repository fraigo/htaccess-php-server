# htaccess-php-server
PHP script to implement .htaccess file

## Objective

To keep an unique api router file (PHP) to manage special requests, and to be compatible with an Apache server (.htaccess) and PHP local server (router.php)

## Usage

* In your web project, create or copy the three files in the root directory
  * `.htaccess` : Basic .htaccess file to manage almost any request, redirecting to api.php when there is not a file to serve.
  * `router.php` : Equivalent to .htaccess for a PHP local server (started with command `PHP -S`)
  * `api.php` : Final script where everything is redirected to process
* Use your application with any of this web servers available.
  * Apache server (reads .htaccess rules) 
  * PHP local server (reads route.php rules)
  
## PHP server command line initialization

* Start a terminal/command line session window
* Change to the web application root directory
* Execute the PHP server command `php -S localhost:8000 route.php`
  * `localhost` is the local server machine
  * `8000` is the port to start the web service, you can change to any other valid HTTP port
  * `route.php` is the php script to manage the request to the web server
* Point your browser to the URL http://localhost:8000/ to view your application running

## Creating special responses to requests

Modify the file api.php to start and run PHP code to manage requests and send a response. 
It works for either Apache server or PHP server.

```php
<?php

$PATH=$_SERVER["PATH_INFO"];

// When requesting http://myserver/info, send phpinfo() data
if ($PATH=="/info"){
    phpinfo();
    return;
}

header("HTTP/1.0 404 Not found");
 ?>
 ```

# References

https://stackoverflow.com/questions/36675596/converting-a-very-simple-htaccess-into-a-php-router
