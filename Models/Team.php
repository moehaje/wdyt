<?php

namespace Models;

use Core\App;
use Core\Database;

class Team {
    public static function create($name, $profilePicture) {
        $db = App::resolve(Database::class);
        $db->query('INSERT INTO teams (name, profile_picture) VALUES (:name, :profilePicture)', [
            'name' => $name,
            'profilePicture' => $profilePicture
        ]);
        
        // Returning the id of the new created team, for the further implementations, 
        // which 'll be inserting members into that created team exactly!
        return $db->connection->lastInsertId();
    }

    public static function getProfilePicture($teamId) {
        $db = App::resolve(Database::class);
        $result = $db->query('SELECT profile_picture FROM teams WHERE id = :teamId', ['teamId' => $teamId])->find();
        return $result['profile_picture'] ?? null;
    }

    public static function updateProfilePicture($teamId, $profilePicture) {
        $db = App::resolve(Database::class);
        $db->query('UPDATE teams SET profile_picture = :profilePicture WHERE id = :teamId', [
            'profilePicture' => $profilePicture,
            'teamId' => $teamId
        ]);
    }
}