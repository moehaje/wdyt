<?php

namespace Http\Controllers;

use Core\App;

$ideas = null;

view('dashboard.view.php', [
    'ideas' => $ideas
]);