<?php
    //include '../configuration.php';
if (isset($_POST['male_bunk_num']) && !empty($_POST['male_bunk_num']) && isset($_POST['female_bunk_num']) && !empty($_POST['female_bunk_num']) && isset($_POST['mixed_bunk_num']) && !empty($_POST['mixed_bunk_num'])) 
{
        resetBunkDefaults($_POST['site_sid'],$_POST['male_bunk_num'], $_POST['female_bunk_num'], $_POST['mixed_bunk_num']);
}

elseif (isset($_POST['bunkSelection']) && !empty($_POST['bunkSelection'])) 
{
        reduceBunkCount($_POST['site_sid'] , $_POST['bunkSelection']);
}

elseif (isset($_GET['site_sid']) && !empty($_GET['site_sid'])) 
{
        getShelterInfoBySID($_GET['site_sid']);
}

else{

        viewBunkCount();
}

function getShelterInfoBySID($siteSID) {
  $servername = "localhost";
$username = "TEST_USER";
$password = "password";
$dbname = "cs6400_sp17_team016";
     // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM `shelter`  WHERE site_sid = '$siteSID'";
    
    $result = $conn->query($sql);

       $row = $result->fetch_assoc();
        echo json_encode($row); 

    $conn->close();
}



function viewBunkCount() {

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

    // For each shelter, it displays the name, site location, phone number, hours of operation and conditions, as well as the number of male/female/mixed bunks available.
    $sql = "SELECT Sh.male_bunk_num, Sh.female_bunk_num, Sh.mixed_bunk_num, Si.short_name, Si.primary_phone_num, Si.st_address,Si.city, Si.state, Si.zip_code,Sh.hours_of_op, Sh.conditions_of_use
            FROM `shelter` AS Sh 
            INNER JOIN `site` AS Si ON Si.site_sid=Sh.site_sid";

 $result = $conn->query($sql);
   $rows = array();
          $tempArray = array();
       $rows = array();
        while($row = $result->fetch_object()) {
                $tempArray = $row;
                array_push($rows, $tempArray);
            }

            echo json_encode($rows); 
 


    $conn-> close();
}


function reduceBunkCount($siteID, $bunkSelection) {
    $servername = "localhost";
    $username = "TEST_USER";
    $password = "password";
    $dbname = "cs6400_sp17_team016";


     $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `shelter` SET ".$bunkSelection." = ".$bunkSelection." - 1 WHERE shelter.site_sid = '$siteID'";

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


function resetBunkDefaults($siteID, $maleBunkCt, $femaleBunkCt, $mixedBunkCt) {
    $servername = "localhost";
    $username = "TEST_USER";
    $password = "password";
    $dbname = "cs6400_sp17_team016";

     $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `shelter`
            SET male_bunk_num = '$maleBunkCt', mixed_bunk_num = '$mixedBunkCt', female_bunk_num = '$femaleBunkCt'
            WHERE site_sid = '$siteID'";

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