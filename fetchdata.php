<?php

// connecting to the database

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "manishadb_testing";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// die if connection was unsuccessfull
if (!$conn){
    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
echo "Great!! connection was successfull";
}

$sql = " SELECT * FROM table_php_trip ";
$result = mysqli_query($conn,$sql);

// find the  number of records returned

echo "<br>";

// mysqli_num_rows($result) is a function to count the number of rows in table

$numRows = mysqli_num_rows($result);
echo "Total number of records found in the database are: " . $numRows;
echo "</br>";
// Display the Rows returned by the sql query

// if ($numRows > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);

    // mysqli_fetch_assoc() function fetches the records one by one until it reaches at the end of the records i.e at NULL. It will be always a next array ,assoc means  it always returns an associative array

    // $row = mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);
    // $row = mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);
    // $row = mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);
    // $row = mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);
    // $row = mysqli_fetch_assoc($result);
    // echo "<br>";
    // echo var_dump($row);
    
    //  we can fetch in a better way using while loop

    while ($row = mysqli_fetch_assoc($result)){

        echo "</br>";
        //  echo var_dump($row);
        echo $row['id']. ". Hello ". $row['name']." welcome to " . $row['destination'];

        echo "</br>";
    }

    




    mysqli_close($conn);

?>