<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$DB_SERVER = 'localhost';
$DB_USER = 'sally';
$DB_PASS = 'somePa55word';
$DB_NAME = 'salamanders';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$query = "SELECT * FROM salamanders";
$result_set = mysqli_query($connection, $query);

// 3. Use returned data (if any)
while($salamanders = mysqli_fetch_assoc($result_set)) {
  echo $salamanders["menu_name"] . "<br />";

// 4. Release returned data
mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);

?>
