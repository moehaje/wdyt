<?php

namespace Http\Controllers;

use Core\App;

$ideas = null;

view('home.view.php', [
    'ideas' => $ideas
]);