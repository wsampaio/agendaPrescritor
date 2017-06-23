<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$db = new SQLite3('teste.db');

if ($db) {

    $stm = "CREATE TABLE Friends(Id integer PRIMARY KEY," . 
           "Name text UNIQUE NOT NULL, Sex text CHECK(Sex IN ('M', 'F')))";

    $db->query($stm);
    
    echo "Database Friends created successfully";
} else {
    print "Connection to database failed!\n";
}



?>
