<?php
echo "Welcome!we're creating a Table in Mysql using PHP<br><br>";

// Ways to connect to a MySql Database
// 1.MySqli  Extension 
// 2.PDO

// we are using MySqli extension

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


// CREATE a TAble In The DataBase

$sql = "CREATE TABLE table_php_trip ( id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY , name VARCHAR(15) NOT NULL , destination VARCHAR(15) NOT NULL , date DATETIME(6) NOT NULL )";

$result = mysqli_query($conn,$sql);
// check for the table creation success

if( $result){
    echo "<br>Table Created Successfully";

}
else {
    echo "Error in creating table ----> " . mysqli_error($conn);
}




mysqli_close($conn);
?>




<!-- sql query -->
<!-- CREATE TABLE `manishadb_testing`.`new_guests` ( `srno` INT(11) NOT NULL , `name` VARCHAR(15) NOT NULL , `destination` VARCHAR(15) NOT NULL , `date` DATETIME(6) NOT NULL ) ENGINE = InnoDB;
​ -->


