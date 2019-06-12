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
    // Display home view
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render('views/home.html');
});

// Define a calendar route
$f3->route('GET /calendar', function()
{
    // Display home view
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render('views/calendar.html');
});

// Define a register route
$f3->route('GET|POST /register', function()
{
    // Display home view
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render('views/register.html');
});

// Define a login route
$f3->route('GET|POST /login', function()
{
    // Display home view
    $view = new Template();
    echo $view->render('views/header.html');
    echo $view->render('views/login.html');
});

// Run Fat-Free
$f3->run();
