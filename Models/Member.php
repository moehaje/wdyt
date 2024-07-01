<?php

namespace Models;

use Core\App;
use Core\Database;

class Member {
    public static function create($teamId, $role, $username, $email, $password, $fullname, $jobTitle) :int
    {
        $db = App::resolve(Database::class);
        $db->query('INSERT INTO members (teamId, role, username, email, password, fullname, job_title) 
                    VALUES (:teamId, :role, :username, :email, :password, :fullname, :jobTitle)', [
            'teamId' => $teamId,
            'role' => $role,
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'fullname' => $fullname,
            'jobTitle' => $jobTitle
        ]);
        return $db->connection->lastInsertId();
    }

    public static function findByEmail($email) {
        $db = App::resolve(Database::class);
        return $db->query('SELECT * FROM members WHERE email = :email', ['email' => $email])->find();
    }

    public static function findByUsername($username) {
        $db = App::resolve(Database::class);
        return $db->query('SELECT * FROM members WHERE username = :username', ['username' => $username])->find();
    }
}