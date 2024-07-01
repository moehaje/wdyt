<?php

namespace Core;

use Models\Member;

class Authenticator {
    public function attempt($email, $password) {
        // Find the user.
        $user = Member::findByEmail($email);

        // Attempt the user.
        if ($user) {
            // verify if the password matches.
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email,
                ]);

                return true;
            }
        }

        return false;

    }

    public static function login($user) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'username' => $user['username'],
            'fullname' => $user['fullname'],
            'job_title' => $user['job_title'],
            'role' => $user['role'],
            'teamId' => $user['teamId']
        ];

        // regenerate the id of the session to make having fully new session when login after logout!
        session_regenerate_id(true);
    }

    public function logout() {
        Session::destroy();
    }

    public static function check() {
        return isset($_SESSION['user']);
    }

    public static function user() {
        return $_SESSION['user'] ?? null;
    }

    public static function id() {
        return static::user()['id'] ?? null;
    }
}