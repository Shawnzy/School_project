<?php

if (isset($_GET['site_sid']) && !empty($_GET['site_sid']))
{
 
        getSoupKitchenInfoByID($_GET['site_sid']);
} 
elseif (isset($_POST['site_sid']) && !empty($_POST['site_sid']))
{
        decreaseKitchenSeats($_POST['site_sid']);
} 

else {
    echo "do nothing";
} 




function showNumKitchenSeats($siteID){

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

    $sql = "SELECT seat_count
            FROM 'cs6400_sp17_team016'.SoupKitchen 
            WHERE site_sid = '$siteID'";
    
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row); // Returns the Number of seats

    $conn->close();

}


function getSoupKitchenInfoByID($siteID){

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
            FROM soupkitchen 
            WHERE site_sid = '$siteID'";
    
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo json_encode($row); // Returns the Number of seats

    $conn->close();

}




function decreaseKitchenSeats($siteID) {

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


    $sql = "UPDATE soupkitchen
		    SET seat_count = (seat_count - 1)
            WHERE site_sid='$siteID'";


     if ($conn->query($sql) === TRUE) 
    {
        echo "true";
    } 
    else 
    {
        echo "false";
    } 

    $conn->close();
}


	

?>