<?php


if (isset($_GET['site_sid']) && !empty($_GET['site_sid'])) 
{
 
        viewServices($_GET['site_sid']);
} 
elseif (isset($_POST['site_sid']) && isset($_POST['hours_of_op']) && isset($_POST['conditions_of_use'])  && isset($_POST['description']) && isset($_POST['male_bunk_num']) && isset($_POST['female_bunk_nume']) && isset($_POST['mixed_bunk_nume'])) 
{
        addShelter($_POST['site_sid'],$_POST['hours_of_op'],$_POST['conditions_of_use'],$_POST['description'],$_POST['male_bunk_num'],$_POST['mixed_bunk_num'],$_POST['female_bunk_num']);
} 
elseif (isset($_POST['site_sid']) && isset($_POST['hours_of_op']) && isset($_POST['conditions_of_use'])  && isset($_POST['description']) && $_POST['description'] == "Food Pantry") 
{
        addFoodPantry($_POST['site_sid'],$_POST['hours_of_op'],$_POST['conditions_of_use'],$_POST['description']);
} 

elseif (isset($_POST['site_sid']) && isset($_POST['hours_of_op']) && isset($_POST['conditions_of_use'])  && isset($_POST['description']) && isset($_POST['seat_count'])) 
{
        addSoupKitchen($_POST['site_sid'],$_POST['hours_of_op'],$_POST['conditions_of_use'],$_POST['description'],$_POST['seat_count']);
} 

elseif (isset($_POST['site_sid'])) {
        addFoodBank($_POST['site_sid']);
    } 

 elseif (isset($_POST['site_sid']) && isset($_POST['description']) && $_POST['description'] == "shelter" ) {
        $descrip = "shelter";
        deleteService($_POST['site_sid'],$descrip);
    } 

  elseif (isset($_POST['site_sid']) && isset($_POST['description']) && $_POST['description'] == "foodbank" ) {
        $descrip = "foodbank";
        deleteService($_POST['site_sid'],$descrip);
    } 


elseif (isset($_POST['site_sid']) && isset($_POST['description']) && $_POST['description'] == "foodpantry" ) {
	$descrip = "foodpantry";
        deleteService($_POST['site_sid'], $descrip);
    } 

  elseif (isset($_POST['site_sid']) && isset($_POST['description']) && $_POST['description'] == "soupkitchen") {
  	$descrip = "soupkitchen";
        deleteService($_POST['site_sid'],$descrip);
    } 


else {
    echo "do nothing";
} 


function viewServices($siteID){

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
    
    // Check to see if this SITE_SID shows up under Shelter, Foodbank, FoodPantry, or SoupKitchen
    $currentServices = array();


    $sql = "SELECT COUNT(*)
	        FROM 'cs6400_sp17_team016'.'Shelter' 
	        WHERE site_sid='$siteID'";
     
    $result = $conn->query($sql);

    if ($result = 0) {
    	array_push($currentServices, 'Shelter');
    }
//-----------------------------------------

    $sql = "SELECT COUNT(*)
	        FROM 'cs6400_sp17_team016'.'FoodPantry' 
	        WHERE site_sid='$siteID'";
     
    $result = $conn->query($sql);

    if ($result = 0) {
    	array_push($currentServices, 'FoodPantry');
    }
//-----------------------------------------

    $sql = "SELECT COUNT(*)
	        FROM 'cs6400_sp17_team016'.'FoodBank' 
	        WHERE site_sid='$siteID'";
     
    $result = $conn->query($sql);

    if ($result = 0) {
    	array_push($currentServices, 'FoodBank');
    }
//-----------------------------------------

    $sql = "SELECT COUNT(*)
	        FROM 'cs6400_sp17_team016'.'SoupKitchen' 
	        WHERE site_sid='$siteID'";
     
    $result = $conn->query($sql);

    if ($result = 0) {
    	array_push($currentServices, 'SoupKitchen');
    }

    $conn->close();

    // Return all the services that this Site_SID doesnt have
    echo $currentServices;   

}


function addShelter($siteID, $hours, $conditions, $description, $maleBunk, $mixedBunk, $femaleBunk){

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

    $sql = "INSERT INTO 'cs6400_sp17_team016'.'Shelter'
            VALUES('$siteID', '$hours', '$conditions', '$description', '$maleBunk', 'mixedBunk', 'femaleBunk')";
   
    $result = $conn->query($sql);

   if ($conn->query($sql) === TRUE) 
    {
      echo true;
    } 
    else 
    {
        echo false;
    } 

    $conn->close();

}

function addFoodPantry($siteID, $hours, $conditions, $description){

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

    $sql = "INSERT INTO 'cs6400_sp17_team016'.'FoodPantry'
            VALUES('$siteID', '$description', '$hours', '$conditions')";
   
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) 
    {
      echo true;
    } 
    else 
    {
        echo false;
    }
    $conn->close();

}

function addFoodBank($siteID){

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

    $sql = "INSERT INTO 'cs6400_sp17_team016'.'FoodBank'
            VALUES('$siteID')";
   
   if ($conn->query($sql) === TRUE) 
    {
      echo true;
    } 
    else 
    {
        echo false;
    }

    $conn->close();

}

function addSoupKitchen($siteID, $hours, $conditions, $description, $seatCount) {

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

    $sql = "INSERT INTO 'cs6400_sp17_team016'.'SoupKitchen'
            VALUES('$siteID', '$description', '$hours', '$conditions', '$seatCount')";
   
   if ($conn->query($sql) === TRUE) 
    {
      echo true;
    } 
    else 
    {
        echo false;
    }

    $conn->close();
}

function deleteService($siteSID,$service)
{
   $servername = "localhost";
$username = "TEST_USER";
$password = "password";
$dbname = "cs6400_sp17_team016";

    // Create connection
    $conn =  new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "DELETE FROM `".$service."` WHERE site_sid = '$siteSID'";
   

     if ($conn->query($sql) === TRUE) 
     {
        echo true;
    } 
    else 
    {
        echo false;
    }

    $conn->close();
}

	

?>

