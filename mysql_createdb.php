<?php
echo "Welcome!we're creating a Mysql Database using PHP<br><br>";

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
// else{
// echo "Great!! connection was successfull";
// }
 
// create a DB
$sql = "CREATE DATABASE manishadb_testing";
$result = mysqli_query($conn,$sql);

// check for the databse creation success..

if( $result){
    echo "Database Created Successfully";

}
else {
    echo "Error creating database ----> " . mysqli_error($conn);
}


mysqli_close($conn);
?>








