<?php

include('database.php');  // this file to login in phpmyadmin and make query [ createDB, createTB, insertTB ]

$q1 = "CREATE TABLE IF NOT EXISTS records(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(225) NOT NULL,
    pass VARCHAR(225) NOT NULL,
    email VARCHAR(225) NOT NULL,
    mobile VARCHAR(225) NOT NULL,
    address VARCHAR(225)
) ENGINE = InnoDB DEFAULT CHARSET = latin1";

$DB->myExec($q1);
?>