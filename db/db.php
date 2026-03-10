<?php
$db = new SQLite3('database.db');

//$db->exec("DROP TABLE IF EXISTS cats");

$db->exec("CREATE TABLE IF NOT EXISTS cats (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    img TEXT
)");

$db->exec("CREATE TABLE IF NOT EXISTS comments (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    cat_id INTEGER,
    msg TEXT
)");



?>