<?php

namespace Models;

use Core\App;
use Core\Database;

class Team {
    public static function create($name) {
        $db = App::resolve(Database::class);
        $db->query('INSERT INTO teams (name) VALUES (:name)', ['name' => $name]);
        
        // Returning the id of the new created team, for the further implementations, 
        // which 'll be inserting members into that created team exactly!
        return $db->connection->lastInsertId();
    }
}