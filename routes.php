<?php

$router->get('/', 'LandingController.php');

$router->get('/dashboard', 'DashboardController.php')->only('auth');

$router->get('/profile', 'ProfileController.php')->only('auth');

$router->get('/register', 'auth/register.php')->only('guest');
$router->post('/register', 'auth/register.php')->only('guest');