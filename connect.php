<?php

$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'bahati';

//Connection to database 
$conn = mysqli_connect($dbServer, $dbUser , $dbPassword, $dbName);

//check if connection is successful
if(mysqli_error($conn)){
    die("Connection failed: ".mysqli_error($conn));
}
else{
    echo "wrong password";
}
