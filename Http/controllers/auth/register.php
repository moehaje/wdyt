<?php

use Core\App;
use Models\Team;
use Models\Member;
use Core\Validator;
use Core\Authenticator;
use Core\FileUpload;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Display the registration form
    return view('auth/register.view.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $team_name = $_POST['team_name'] ?? '';
    $fullname = $_POST['fullname'] ?? '';
    $job_title = $_POST['job_title'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

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

    // Check if the email/member already exists
    if (Member::findByEmail($email)) {
        $errors['email'] = 'Email already exists.';
    }

    if (Member::findByUsername($username)) {
        $errors['username'] = 'This username is already taken.';
    }

    // Validate and upload profile picture
    $profilePicture = null;
    if (isset($_FILES['team_profile_picture'])) {
        $fileError = FileUpload::validate($_FILES['team_profile_picture']);
        if ($fileError) {
            $errors['team_profile_picture'] = $fileError;
        } else {
            $profilePicture = FileUpload::upload($_FILES['team_profile_picture'], 'assets/imgs/');
            if (!$profilePicture) {
                $errors['team_profile_picture'] = 'Failed to upload the image.';
            }
        }
    }

    if (!empty($errors)) {
        return view('auth/register.view.php', ['errors' => $errors]);
    }

    // Create the team
    $teamId = Team::create($team_name, $profilePicture);

    // Create the admin user
    $memberId = Member::create($teamId, 'admin', $username, $email, $password, $fullname, $job_title);

    $_SESSION['user']['teamId'] = $teamId;

    // login the user
    // find the new user, after creation
    $newUser = Member::findByEmail($email);

    // login process
    if ($newUser && password_verify($password, $newUser['password'])) {
        Authenticator::login($newUser);
        header('location: /dashboard');
        exit();
    } else {
        $errors['general'] = 'An error occurred during registration. Please try again.';
        return view('auth/register.view.php', ['errors' => $errors]);
    }

}