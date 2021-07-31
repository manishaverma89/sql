<?php

<h1>
Creating a MySql Database using PHP
</h1>

// Ways to connect to a MySql Database
// 1.MySqli  Extension 
// 2.PDO

// we are using MySqli extension

//Connection to the database
// we need 3 variables

$servername = "localhost";
$username = "root";
$password = "root";
// $dbname = "databaseName";

// Create a connection

$conn = mysqli_connect($servername,$username,$password);       //  add $dbname in last

// die if connection was unsuccessfull
if (!$conn){
    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
    echo "Great!! connection was successfull";
}


// Create a DB

&sql = "CREATE DATABASE dbManisha";
$result = mysqli_query($conn,$sql);
echo "<br>Result is: ";

echo var_dump($result);












?>