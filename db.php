<?php
// DB 연결
session_start();
$db = new mysqli('localhost', 'root', 'root', 'tryy');

if ($db->connect_errno) {
    die('Connection Error ('.$mysqli->connect_errno.'): '.
    $db->connect_error);
} else {
    echo ("");
}

function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}

?>