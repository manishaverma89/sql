<?php


//Connection to the database
// we need 3 variables

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "manishadb_testing";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $dbname);       // Also add $dbname in last


// die if connection was unsuccessfull
if (!$conn){
    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
echo "Great!! connection was successfull<br>";
}

//  SQL Query to be Executed
$name= "Manisha";
$destination= "ABC";
$sql = "INSERT INTO `table_php_trip` (`name`, `destination`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn,$sql);
// Add a new trip to the Trip Table in the Database
if( $result){
    echo "<br>Record has been inserted Successfully";

}
else {
    echo "Error in inserting record ----> " . mysqli_error($conn);
}




mysqli_close($conn);
?>