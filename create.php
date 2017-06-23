<?php

$db = new SQLite3('teste.db');

if ($db) {

    $stm = "CREATE TABLE Friends(Id integer PRIMARY KEY," . 
           "Name text UNIQUE NOT NULL, Sex text CHECK(Sex IN ('M', 'F')))";

    $db->query($stm);
    
    echo "Database Friends created successfully";
} else {
    print "Connection to database failed!\n";
}



//sqlite_close($dbhandle);
?>
