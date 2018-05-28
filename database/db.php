<?php
define("HOSTNAME", "");
define("USERNAME", "");
define("PASSWORD", "");
define("DATABASE", "");



$db = mysql_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if ($db->connect_error) {
    die ("Error while trying to connect to database: " . $db->connect_error);
}



>