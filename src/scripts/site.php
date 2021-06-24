<?php
    //include '../configuration.php';

if (isset($_GET['site_sid']) == true) {
        getSiteBySiteID($_GET['site_id'])
    } 
if (isset($_GET['username']) == true) {
        getUserDataByUsername($_GET['username'])
    } 



function getSiteBySiteID($site_sid)
{
    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "SELECT site_sid, short_name, st_number
              FROM User WHERE username = '$username' AND password = '$userPassword'";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row);

    $conn->close();
}

function getUserDataByUsername($username)
{
     // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT username, site_sid, firstname, lastname, email
              FROM User WHERE username = '$username'";
   
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row);

    $conn->close();
}


    
?>