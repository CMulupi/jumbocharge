<?php


use core\Database;
use core\Response;

$config = require base_path('config.php');

$db = new Database($config['database']);

$currentUser=1;

// if authorized then
// proceed to delete.



$db->query("DELETE FROM notes WHERE noteid=:noteid", [
    ":noteid" => $_POST['noteid']
]);

header("location:/notes");



