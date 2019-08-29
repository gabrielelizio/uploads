<?php

$conn = @mysql_connect('localhost','systemsauer','systemsauer');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('systemsauer', $conn);

?>