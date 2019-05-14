<?php
// DB 연결
$mysqli = new mysqli('localhost', 'root', 'root', 'tryy');

if ($mysqli->connect_errno) {
    die('Connection Error ('.$mysqli->connect_errno.'): '.
    $mysqli->connect_error);
} else {
    echo ("");
}
?>