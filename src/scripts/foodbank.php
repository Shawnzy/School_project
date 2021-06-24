<?php

function addItemFoodBank($siteId, $itemName, $itemCategory, $itemType, $storageType, $expDate, $quantity) {
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

    // check to see if item exists
    $sql = "SELECT site_sid, item_name, storage_type, units_num, category, type, exp_date
            FROM `item` 
            WHERE site_sid = '$siteId', 
                    item_name = '$itemName', 
                    storage_type = '$storageType', 
                    category = '$itemCategory',
                    type = '$itemType', 
                    exp_date = '$expDate'";

    $result = $conn -> query(sql);                    

    if (mysqli_num_rows($result) > 0) 
    {
        $sql = "UPDATE item SET units_num = units_num + '$quantity'
        WHERE site_sid = '$siteId', 
                item_name = '$itemName', 
                storage_type = '$storageType', 
                category = '$itemCategory',
                type = '$itemType', 
                exp_date = '$expDate'";
    }
    else
    {
        $sql = "INSERT INTO item (site_sid, item_name, storage_type, units_num, category, type, exp_date)
        VALUES ('$siteId', '$itemName', '$storageType', '$quantity', '$itemCategory', 'itemType', 'expDate')";
    }

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

function viewItemsFoodBank($siteId) {
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

    $sql = "SELECT item_sid, site_sid, item_name, storage_type, units_num, category, type, exp_date
            FROM `item` 
            WHERE site_sid = '$siteId'";

    $result = $conn->query($sql);

       $row = $result->fetch_assoc();
        echo json_encode($row); 
    

    $conn->close();
}


function editItemsFoodBank($itemId, $siteId, $itemName, $quantity) {
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

    $sql = "UPDATE item SET units_num = '$quantity'
            WHERE site_sid = '$siteId',
                item_sid = '$itemId',  
                item_name = '$itemName'";

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


function removeItemFFoodBank($itemId, $siteId, $itemName, $numRemove) {
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

    $sql = "UPDATE item SET units_num = units_num -'$numRemove'
            WHERE site_sid = '$siteId',
                item_sid = '$itemId',  
                item_name = '$itemName'";

    
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
