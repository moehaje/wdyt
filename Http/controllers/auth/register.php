<?php

use Core\App;
use Core\Database;
use Models\Team;
use Core\Validator;
use Core\Authenticator;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Display the registration form
    return view('auth/register.view.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $username = $_POST['username'] ?? '';
    $team_name = $_POST['team_name'] ?? '';

    // Validate the form inputs
    $errors = [];

    if (!Validator::string($team_name, 1, 255)) {
        $errors['team_name'] = 'A team name of no more than 255 characters is required.';
    }

    if (!Validator::string($username, 1, 255)) {
        $errors['username'] = 'A username of no more than 255 characters is required.';
    }

    if (!Validator::email($email)) {
        $errors['email'] = 'Please provide a valid email address.';
    }

    if (!Validator::string($password, 8, 255)) {
        $errors['password'] = 'Please provide a password of at least 8 characters.';
    }

    if (!empty($errors)) {
        return view('auth/register.view.php', [
            'errors' => $errors
        ]);
    }

    $db = App::resolve(Database::class);

    // Check if the email already exists
    $user = $db->query('select * from members where email = :email', [
        'email' => $email
    ])->find();

    if ($user) {
        $errors['email'] = 'Email already exists.';
        return view('auth/register.view.php', [
            'errors' => $errors
        ]);
    }

    // Create the team
    $teamId = Team::create($team_name);

    // Create the admin user
    $db->query('INSERT INTO members (teamId, role, username, email, password) VALUES (:teamId, :role, :username, :email, :password)', [
        'teamId' => $teamId,
        'role' => 'admin',
        'username' => $username,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // login the user
    // find the new user, after creation
    $newUser = $db->query('SELECT * FROM members WHERE email = :email', ['email' => $email])->find();

    // login process
    if ($newUser) {
        $auth = new Authenticator();
        $auth->login($newUser);
        header('location: /');
        exit();
    } else {
        $errors['general'] = 'An error occurred during registration. Please try again.';
        return view('auth/register.view.php', ['errors' => $errors]);
    }

}