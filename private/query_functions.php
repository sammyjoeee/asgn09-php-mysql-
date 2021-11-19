<?php

function find_all_salamanders() {
  global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ACS";
    $result = mysqli_query($db, $sql);
    return $result;
}

?>