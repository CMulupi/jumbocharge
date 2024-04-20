<?php

use core\Database;
use core\Response;

$config = require base_path('config.php');

$db = new Database($config['database']);



$note = $db->query(
    "SELECT * FROM notes WHERE noteid=:noteid",
    [
        "noteid" => $_GET['noteid']
    ]
)->findOrFail();


$currentUser = 1;

if ($note['userid'] != $currentUser) {

    Response::abort();
}

view('notes/show.view.php', [
    'note' => $note
]);
