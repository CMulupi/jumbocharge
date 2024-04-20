<?php

use core\Database;
use core\Validator;



$config = require base_path('config.php');

$db = new Database($config['database']);

require base_path('core/Validator.php');

$errors = [];


if (!Validator::string($_POST['description'])) {
    $errors['description'] = 'A body of atleast 10 Characters and not more than 30 Characters is required.';
}


if (empty($errors)) {
    $db->query("INSERT INTO notes(description,userid) VALUES (:description,:userid)", [
        ":description" => $_POST['description'],
        ":userid" => 1
    ]);
    header("location:/notes");

    die();
}
