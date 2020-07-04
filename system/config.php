<?php
	$db_user = "";
	$db_pass = "";
	$db_database = "";

	$conn = mysqli_connect("localhost", $db_user, $db_pass, $db_database);
    if (!$conn) {
        die("Failed connection to database ".mysql_error($conn));
    }
	mysqli_set_charset($conn,"utf8");
?>