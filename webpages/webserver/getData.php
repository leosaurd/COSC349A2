<?php
session_start();
/** This file is intended to get data from DBServer, and display it upon accessing the website. */
$dbhostname = "contactdb.cfixkeuidgzm.us-east-1.rds.amazonaws.com";
$dbname = "ContactDB";
$dbusername = "admin";
$dbpassword = "password";
$dbport = "3306";

/**the connection that has been generated*/
$conn = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);

/**checking if the connection was successful */
if($conn->connect_error){
    die("Connection to database failed " . $conn->connect_error);
}
/**getting the data from the DB to be displayed */
$result = mysqli_query($conn, "SELECT * FROM data");

/**Displaying all the recorded contacts */
if(mysqli_num_rows($result) > 0){
    $i = 0;
    echo "<table>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr><td>First Name:" . $row["adata"] . "</td>"; 
        echo "<td>Last Name:" . $row["bdata"] . "</td>";
        echo "<td>Number:" . $row["cdata"] . "</td></tr>";
    }
}

echo "</table>";

/**closing off the connection*/
mysqli_close($conn);
?>