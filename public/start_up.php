<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../db/db.php';

$db->exec("INSERT OR IGNORE INTO cats (img) VALUES ('images/cute_kitty.jpeg')");
$db->exec("INSERT OR IGNORE INTO cats (img) VALUES ('images/cat_pic2.jpeg')");
$db->exec("INSERT OR IGNORE INTO cats (img) VALUES ('images/gato4.jpeg')");

echo "Listo";
?>