<?php
session_start();
/**The general values of the connection, not secure*/
$dbhostname = "contactdb.cfixkeuidgzm.us-east-1.rds.amazonaws.com";
$dbname = "ContactDB";
$dbusername = "admin";
$dbpassword = "password";
$dbport = "3306";

/**the connection that has been generated*/
$conn = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);

/**checking if the connection was successful */
if($conn->connect_error){
    die("Connection to database failed, " . $conn->connect_error);
}

/** Get values from the index.html */
$fname = mysqli_real_escape_string($conn, $_REQUEST["fname"]);
$lname = mysqli_real_escape_string($conn, $_REQUEST["lname"]);
$pnumber = mysqli_real_escape_string($conn, $_REQUEST["pnumber"]);


/**Inserting data to connected table */
$sql = "INSERT INTO data (adata, bdata, cdata) VALUES ('$fname', '$lname', '$pnumber')";
if(mysqli_query($conn, $sql)){
    echo "Contact added successfully.";
} else{
    echo "Contact record failed. " . mysqli_error($conn);
}
/**closing off the connection*/
mysqli_close($conn);
?>
