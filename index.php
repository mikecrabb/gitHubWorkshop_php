<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //API Routes
    //
    'users' => "/api/user",
    'singleUser' => "/api/user/(?'userID'[\w\-]+)",
    //
    // Home Page
    //
    'home' => "/"

);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');

?>
