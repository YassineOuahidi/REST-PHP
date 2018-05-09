<?php
define("HOSTNAME", "");
define("USERNAME", "");
define("PASSWORD", "");
define("DATABASE", "");



$db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if ($db->connect_error) {
    die ("Error while trying to connect to database: " . $db->connect_error);
}
return $db;




// $res = $db->query("THE QUERY");
// $row = $res->fetch_assoc();
// echo $row['ekkle'];
>