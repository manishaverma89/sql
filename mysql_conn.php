<?php
echo "Welcome!! we're ready to get connected to a Database<br><br>";

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

$conn = mysqli_connect($servername,$username,$password);       // Also add $dbname in last


// die if connection was unsuccessfull
if (!$conn){
    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
echo "Great!! connection was successfull";
}










mysqli_close($conn);
?>