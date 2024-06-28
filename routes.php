<?php

$router->get('/', 'HomeController.php');
$router->get('/profile', 'ProfileController.php');

$router->get('/register', 'auth/register.php')->only('guest');
$router->post('/register', 'auth/register.php')->only('guest');