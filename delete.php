<?php

//Connection to the database


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "manishadb_testing";

// Create a connection

$conn = mysqli_connect($servername,$username,$password,$dbname);       // Also add $dbname in last


// die if connection was unsuccessfull
if (!$conn){
    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
echo "Great!! connection was successfull";
}

$sql = "DELETE FROM `table_php_trip` WHERE `destination` = 'USA' LIMIT 5"; 
$result = mysqli_query($conn,$sql); 

// LIMIT helps in limit the number of selections

// $affectedRows = mysqli_affected_rows($conn);    //returns the affected rows
// echo "</br>Number of affected rows are: " .$affectedRows;

// or
if($result)
{
    echo "</br>deleted";
}
   else {
      echo "not deleted-->" . mysqli_error($conn);
   }

mysqli_close($conn);
?>






