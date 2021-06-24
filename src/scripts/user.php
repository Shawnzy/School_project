<?php
    //include '../configuration.php';

if(isset($_GET['username']) && isset($_GET['password'])) {
        getUserDataByUsernameAndPassword($_GET['username'],$_GET['password']);
    }
elseif(isset($_GET['username'])) {
         getUserDataByUsername($_GET['username']);
    }



function getUserDataByUsernameAndPassword($usrname,$userPassword)
{

      $servername = "localhost";
$username = "TEST_USER";
$password = "password";
$dbname = "cs6400_sp17_team016";


    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "SELECT *
              FROM User WHERE username = '$usrname' AND password = '$userPassword'";
    
    
    $result = $conn->query($sql);

       $row = $result->fetch_assoc();
        echo json_encode($row); 
    

    $conn->close();
}

function getUserDataByUsername($usrname)
{

      $servername = "localhost";
$username = "TEST_USER";
$password = "password";
$dbname = "cs6400_sp17_team016";

     // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT *
              FROM User WHERE username = '$usrname'";
   
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row);

    $conn->close();
}


    
?>