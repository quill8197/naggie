<?php
/**
* Created by PhpStorm.
* User: Quill McConnell
* Date: 4/15/2019
* Time: 12:58 PM
* Description: practice routing
*/

// Start a session
session_start();

// Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');

// Create an instance of the base class
$f3 = Base::instance();

// Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

// Define a default route
$f3->route('GET /', function()
{
    echo "Hello World";
    /*
    // Display home view
    $view = new Template();
    echo $view->render('views/my-pets.html');
    */
});

// Run Fat-Free
$f3->run();
