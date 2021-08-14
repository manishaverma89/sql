<?php


//Connection to the database


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
echo "Great!! connection was successfull";
}


$sql = " SELECT * FROM table_php_trip WHERE destination = 'AMBALA' ";
$result = mysqli_query($conn,$sql);

// find the  number of records returned

echo "<br>";

// mysqli_num_rows($result) is a function to count the number of rows in table

$numRows = mysqli_num_rows($result);
echo "Total number of records found in the database are: " . $numRows;
echo "</br>";
 $number = 1;

//  Usage of WHERE clause to fetch data from the database

if ($numRows>0){

       while ($row = mysqli_fetch_assoc($result)) {
      echo  $number . ". Hello " . $row['name'] . " welcome to " . $row['destination'];
       echo "</br>";
    $number ++;
       } 

       
    }

//  Usage of where clause to Update Data 

$sql = " UPDATE `table_php_trip` SET `name` = 'NK' WHERE `id` = 5 "; 
$result = mysqli_query($conn,$sql); //returns true/false for updation 
echo var_dump($result);

$affectedRows = mysqli_affected_rows($conn);    //returns the affected rows
echo "</br>Number of affected rows are: " .$affectedRows;

if ($result){
    echo "</br>updated the record successfully";

}
else{
    echo "couldn't Update the record";
}
      
        


mysqli_close($conn);
?>








