<?php

$conn = @mysql_connect('localhost','systemsauer1','root');
if (!$conn) {
	die('Could not connect:' . mysql_error());
}
mysql_select_db('systemsauer', $conn);
?>
