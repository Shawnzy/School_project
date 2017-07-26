<?php



if (isset($_GET['client_sid']) && !empty($_GET['client_sid']) && empty($_GET['firstname']) && empty($_GET['lastname'])) 
{
 
        searchClientByClientSID($_GET['client_sid']);
} 
elseif (isset($_GET['client_sid']) && !empty($_GET['client_sid']) && isset($_GET['firstname'])  && !empty($_GET['firstname']) && isset($_GET['lastname']) && !empty($_GET['lastname'])) 
{
    echo "search all";
        searchAllClients($_GET['client_sid'],$_GET['firstname'],$_GET['lastname']);
} 
elseif (empty($_GET['client_sid']) && isset($_GET['firstname']) || isset($_GET['lastname'])) 
{
        searchAllClientsByName($_GET['firstname'],$_GET['lastname']);
} 
elseif (isset($_POST['client_sid']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['id_num']) && isset($_POST['id_type']) && isset($_POST['phone_num']) && isset($_POST['gender'])) {
        insertNewClient($_POST['client_sid'],$_POST['firstname'],$_POST['lastname'],$_POST['id_num'],$_POST['id_type'],$_POST['phone_num'],$_POST['gender']);
    } 

elseif (isset($_POST['client_sid']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone_num'])) {
        updateClientInfo($_POST['client_sid'],$_POST['firstname'],$_POST['lastname'],$_POST['phone_num']);
} 

else {
    echo "do nothing";
} 




function searchClientByClientSID($client_sid)
{
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
    
    $sql = "SELECT client_sid, firstname, lastname, id_num, id_type,phone_num,gender
              FROM Client WHERE client_sid = '$client_sid'";
    
    $result = $conn->query($sql);

       $row = $result->fetch_assoc();
        echo json_encode($row); 
    

    $conn->close();
}

function searchAllClients($client_sid,$firstname,$lastname)
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
    
    $sql = "SELECT client_sid, firstname, lastname, id_num, id_type,phone_num,gender
              FROM Client WHERE client_sid = '$client_sid' OR (firstname = '$firstname' AND lastname = '$lastname')";
    
    $result = $conn->query($sql);

      
          $tempArray = array();
       $rows = array();
        while($row = $result->fetch_object()) {
                $tempArray = $row;
                array_push($rows, $tempArray);
            }

            echo json_encode($rows); 
 
   

    $conn->close();
}

function searchAllClientsByName($firstname,$lastname)
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
    
    $sql = "SELECT client_sid, firstname, lastname, id_num, id_type,phone_num,gender
              FROM Client WHERE firstname = '$firstname' AND lastname = '$lastname'";
    
    $result = $conn->query($sql);

    if(mysql_num_rows($result) > 0)
  {
       $tempArray = array();
       $rows = array();
        while($row = $result->fetch_object()) {
                $tempArray = $row;
                array_push($rows, $tempArray);
            }

            echo json_encode($rows); 
}
    else
    { 
        $sql2 = "SELECT client_sid, firstname, lastname, id_num, id_type,phone_num,gender
              FROM Client WHERE firstname = '$firstname' OR lastname = '$lastname'";
    
    $result2 = $conn->query($sql2);
   
       $rows2 = array();
        $tempArray2 = array();
            while($row2 = $result2->fetch_object()) {
                $tempArray2 = $row2;
                array_push($rows2, $tempArray2);
            }

        echo json_encode($rows2); 
   
    }
    

    $conn->close();
}

function insertNewClient($client_sid,$firstname,$lastname,$id_num,$id_type,$phone_num,$gender)
{
    $servername = "localhost";
$username = "TEST_USER";
$password = "password";
$dbname = "cs6400_sp17_team016";

    $phone_num = "";
    // Create connection
    $conn =  new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO Client (client_sid, firstname, lastname, id_num, id_type,phone_num,gender) VALUES ('$client_sid','$firstname','$lastname','$id_num','$id_type','$phone_num','$gender')";
   
  
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

function updateClientInfo($client_sid,$firstname,$lastname,$phone_num)
{
   $servername = "localhost";
$username = "TEST_USER";
$password = "password";
$dbname = "cs6400_sp17_team016";

if($phone_num == "N/A"){
    $phone_num = "";
}
    // Create connection
    $conn =  new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "UPDATE Client SET firstname = '$firstname', lastname = '$lastname', phone_num = '$phone_num'
    WHERE client_sid = '$client_sid'";
   

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