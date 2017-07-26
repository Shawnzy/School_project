
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atlanta Sharing Alliance Coordination System</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
    <link href="./css/bootstrap-select.css" rel="stylesheet">
    <link href="./css/theme.css" rel="stylesheet">
    <link href="./css/home.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
                         <a class="navbar-brand" rel="home" href="#">
        <img style="height: 90px;width:90px;margin-top: -7px;"
             src="./images/logo.png">
    </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown" id="clientMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Client Services</strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a class="clientMenu" id="clientMenu_1">Client Search</a></li>
                  <li><a class="clientMenu" id="clientMenu_2">Sign Up Client</a></li>
                </ul>
              </li>


                   <li class="dropdown" id="reportsMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Reports</strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a class="reportsMenu" id="reportsMenu_1">Outstanding Requests Report</a></li>
                  <li><a class="reportsMenu" id="reportsMenu_2">Meals Remaining Report</a></li>
  <li><a class="reportsMenu" id="reportsMenu_3">Available Bunks Report</a></li>
                </ul>
              </li>

                       <li class="dropdown" id="foodBankMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Food Bank</strong><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                   
                     <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Manage Items <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                           <li><a tabindex="-1" class="foodBankMenu" id="foodBankMenu_2">Add Items</a></li>
                           <li><a tabindex="-1" class="foodBankMenu" id="foodBankMenu_3">Edit Items</a></li>
                           <li><a tabindex="-1" class="foodBankMenu" id="foodBankMenu_4">Remove Items</a></li>
                      </ul>
                    </li>
                <li><a class="foodBankMenu" id="foodBankMenu_1">Generate Inventory Report</a></li>
                </ul>
              </li>

             <li class="dropdown" id="soupKitchenMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Soup Kitchen</strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a class="soupKitchenMenu" id="soupKitchenMenu_2">View Kitchen Seat Count</a></li>
                   <li><a class="soupKitchenMenu" id="soupKitchenMenu_1">Reduce Soup Kitchen Seats</a></li>
                </ul>
              </li>

                        <li class="dropdown" id="shelterMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Shelter</strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
               <li><a class="shelterMenu" id="shelterMenu_1">View Bunk Count</a></li>
                  <li><a class="shelterMenu" id="shelterMenu_2">Reduce Bunk Count</a></li>
              <li><a class="shelterMenu" id="shelterMenu_3">Reset Bunk Count</a></li>
                </ul>
              </li>

                <li class="dropdown" id="serviceMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Manage Services</strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
                   <li><a class="serviceMenu" id="serviceMenu_1">Add Service</a></li>
                  <li><a class="serviceMenu" id="serviceMenu_2">Edit Service</a></li>
  <li><a class="serviceMenu" id="serviceMenu_3">Delete Service</a></li>
                </ul>
              </li>

                     <li class="dropdown" id="itemRequestMenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>Item Request</strong><span class="caret"></span></a>
                <ul class="dropdown-menu">
               <li><a class="itemRequestMenu" id="itemRequestMenu_1">Item Request</a></li>
 
                </ul>
              </li>

            </ul>

 <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text" id="loggedInAs"></p></li>
        </ul>

          </div><!--/.nav-collapse -->
</div>
        </nav>

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3 text-center">Atlanta Sharing Alliance Coordination System</h1>
    <p class="lead text-center">Please select options from the menu above.</p>
    <!--/.<img src="" title="">-->
  </div>
</div>

     <div class="modal fade" id="clientSearchModal" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Client Search</legend>

         <div id="clientSearchDiv">
          <input type="text" id="clientSearchFirstName" class="form-control" placeholder="Enter First Name" required autofocus/>
          <input type="text" id="clientSearchLastName" class="form-control" placeholder="Enter Last Name" required autofocus/>
             <input type="text" id="clientSearchID" placeholder="Enter Client ID" class="form-control"/>
         </div>

        </div>

        <div class="modal-footer">
          <button type="button" id="clientSearchCont" class="btn btn-default">Search</button>
          <button type=button id="clientSearchCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

       <div class="modal fade" id="clientSearchResults" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Client Search Results</legend>

         <div id="clientSearchResultsDiv">
          <ul class="list-group clientSearchResultsList">
          <!--<li class="list-group-item disabled">Someone's information</li>>-->
          </ul>

        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="clientSearchResultsCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="viewClientReport" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Client Report</legend>

         <div id="clientReportDiv">
          <form>
  <div class="form-group">
     <label for="clientReportFirstName">First Name</label>
    <input readonly type="text" class="form-control" id="clientReportFirstName" placeholder="N/A"/>
     <label for="clientReportLastName">Last Name</label>
    <input readonly type="text" class="form-control" id="clientReportLastName" placeholder="N/A"/>
    <label for="clientReportPhone">Phone Number</label>
    <input readonly type="text" class="form-control" id="clientReportPhone" placeholder="N/A"/>
     <label for="clientReportID">ID</label>
    <input readonly type="text" class="form-control" id="clientReportID" placeholder="N/A"/>
     <label for="clientReportIDType">ID Type</label>
    <input readonly type="text" class="form-control" id="clientReportIDType" placeholder="N/A"/>
     <label for="clientReportGender">Gender</label>
    <input readonly type="text" class="form-control" id="clientReportGender" placeholder="N/A"/>
  </div>
  <div id="editClientButtons">
   <button type=button id="clientReportSaveEdit" class = "btn btn-default">Save Changes</button>
   <button type=button id="clientReportCancelEdit" class = "btn btn-default">Revert Changes</button>
 </div>
  </form>

        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="clientReportEdit" class = "btn btn-default">Edit Client Information</button>
          <button type=button id="clientReportCheckIn" class = "btn btn-default">Check In Client</button>
          <button type=button id="clientReportAddServiceLog" class = "btn btn-default">Add New Service Log Entry</button>
           <button type=button id="clientReportCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

     <div class="modal fade" id="clientCheckIn" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Client Check In</legend>

         <div id="clientCheckInResultsDiv">
          <ul class="list-group clientCheckInResultsList">
            <a href="#" class="list-group-item list-group-item-action" id="checkInClientSoupKitchen"><legend>Provide a Meal</legend></a>
          <a href="#" class="list-group-item list-group-item-action" id="checkInClientShelter"><legend>Check into Shelter</legend></a>
          </ul>

        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="clientCheckInResultsCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


      <div class="modal fade" id="clientServiceLog" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Client Service Log</legend>
         <div id="clientServiceLogEntry">
 <label for="clientServiceLogInput">Service Log Entry</label>
    <input readonly type="text" class="form-control" id="clientServiceLogInput" placeholder="Enter New Service Log"/>
        </div>
         </div>
        <div class="modal-footer">
          <button type=button id="clientServiceLogSave" class = "btn btn-default">Save</button>
           <button type=button id="clientReportCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="revertEmployeeEdit" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmRevertEditMessage">
             <h4 id="resetBunkConfirm">Are you sure you want to revert the changes?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="employeeEditRevertConfirmYes" >Yes</button>
                <button type="button" class="btn btn-default" id="employeeEditRevertConfirmCancel" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

  <div class="modal" id="saveEmployeeEdit" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmEditMessage">
             <h4 id="resetBunkConfirm">Are you sure you want to save the changes to the employee?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="employeeEditConfirmYes" >Yes</button>
                <button type="button" class="btn btn-default" id="employeeEditConfirmCancel" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="clientCheckInSave" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmEditMessage">
             <h4 id="clientCheckInSaveConfirm">Are you sure you want to check in the client?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="clientCheckInYes" >Yes</button>
                <button type="button" class="btn btn-default" id="employeeEditConfirmCancel" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>



  <div class="modal" id="revertEmployeeEdit" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmRevertEditMessage">
             <h4 id="resetBunkConfirm">Are you sure you want to revert the changes?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="employeeEditConfirmYes" >Yes</button>
                <button type="button" class="btn btn-default" id="employeeEditConfirmCancel" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



      <div class="modal fade" id="signUpForm" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Sign Up Form</legend>

         <div id="signUpDiv">
          <form>
  <div class="form-group">
    <label for="signUpClientSID">Client SID</label>
    <input type="text" class="form-control" id="signUpClientSID" placeholder="Enter Client SID"/>
    <label for="signUpFirstName">First Name</label>
    <input type="text" class="form-control" id="signUpFirstName" placeholder="Enter First Name"/>
    <label for="signUpLastName">Last Name</label>
    <input type="text" class="form-control" id="signUpLastName" placeholder="Enter Last Name"/>
     <label for="signUpPhone">Phone Number</label>
    <input  type="text" class="form-control" id="signUpPhone" placeholder="Enter Phone Number (optional)"/>
    
     <label for="signUpID">ID</label>
    <input  type="text" class="form-control" id="signUpID" placeholder="Enter ID"/>
     <label for="signUpIDType">ID Type</label>
    <input  type="text" class="form-control" id="signUpIDType" placeholder="Enter ID Type"/>
    <div>
      <label for="signUpGender">Gender</label>
      <select id="signUpGender"><option>Make a selection</option><option>M</option><option>F</option></select>
</div>
          </div>
  </form>


        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="signUpFormSave" class = "btn btn-default">Save</button>
           <button type=button id="signUpFormCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>



      <div class="modal fade" id="addItems" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Add Items</legend>

        
         
  <div class="form-group">
    <label for="addItemName">Item Name</label>
    <input type="text" class="form-control" id="addItemName" placeholder="Enter Name of Item"/>
   <label for="addItemType">Item Type</label>
      <select id="addItemType"><option>Make a selection</option><option>Food</option><option>Supply</option></select>

<div class="foodCategoryDiv" hidden>
<label for="addItemFoodCategory">Food Category</label>
      <select id="addItemFoodCategory"><option>Make a selection</option><option>Vegetables</option><option>Nuts/Grains/Beans</option><option>Meat/Seafood</option><option>Dairy/Eggs</option>
<option>Sauce/Condiment/Seasoning</option><option>Juice/Drink</option>
      </select>
</div>

<div class="supplyCategoryDiv" hidden>
<label for="addItemSupplyCategory">Food Category</label>
      <select id="addItemSupplyCategory"><option>Make a selection</option><option>Personal Hygiene</option><option>Clothing</option><option>Shelter</option><option>Other</option>
<option>Sauce/Condiment/Seasoning</option><option>Juice/Drink</option>
      </select>
</div>


 <label for="addItemStorageType">Storage Type</label>
      <select id="addItemStorageType"><option>Make a selection</option><option>Dry Good</option><option>Refrigerated</option><option>Frozen</option></select>

 <label for="addItemExpiration">Expiration Date (If Any)</label>
    <input type="text" class="form-control" id="addItemExpiration" placeholder="yyyy-mm-dd"/>

<label for="addItemQuantity">Quantity</label>
   <input type="text" class="form-control" id="addItemQuantity" placeholder="Enter Number of Items"/>
</div>
 
        </div>
       

        <div class="modal-footer">
          <button type=button id="addItemSave" class = "btn btn-default">Save</button>
           <button type=button id="addItemCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>



<!-- Modal confirm -->
<div class="modal" id="kitchenReduceSeatsModal" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4>Are you sure you want to reduce number of soup kitchen seats?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="kitchenReduceSeatsYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="kitchenReduceSeatsCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>


 <div class="modal fade" id="reduceBunkCount" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend id="reduceLegend">Reduce Bunk Count</legend>
         <div id="reduceBunkCountDiv">
 <label for="reduceBunkType">Select Bunk Type</label>
      <select id="reduceBunkType"><option>Make a selection</option><option>Male</option><option>Female</option><option>Mixed</option></select>
        </div>
         </div>
        <div class="modal-footer">
          <button type=button id="reduceBunkCountSave" class = "btn btn-default">Save</button>
           <button type=button id="reduceBunkCountCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="reduceBunkCountConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="reduceBunkConfirm">Are you sure you want to reduce the bunk count?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="reduceBunkCountConfirmYes">Yes</button>
                <button type="button" class="btn btn-default" id="reduceBunkCountCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="resetBunkCount" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend id="resetLegend">Reset Bunk Count</legend>
         <div id="resetBunkCountDiv">
<label for="resetMaleBunk">Male Bunk Count</label>
      <input type="text" class="form-control" id="resetMaleBunk" placeholder="0"/>

 <label for="resetFemaleBunk">Female Bunk Count</label>
    <input type="text" class="form-control" id="resetFemaleBunk" placeholder="0"/>

<label for="resetMixedBunk">Mixed Bunk Count</label>
   <input type="text" class="form-control" id="resetMixedBunk" placeholder="0"/>

  </form>
        </div>
         </div>
        <div class="modal-footer">
          <button type=button id="resetBunkCountSave" class = "btn btn-default">Save</button>
           <button type=button id="resetBunkCountCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="resetBunkCountConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="resetBunkConfirm"></h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="resetBunkCountConfirmYes">Yes</button>
                <button type="button" class="btn btn-default" id="resetBunkCountCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>


 <div class="modal fade" id="displayBunkCount" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend id="reduceOrResetLegend">Shelter Bunk Count</legend>
         <div id="BunkCountDiv">
 
<ul class="list-group">
  <li class="list-group-item justify-content-between">
    Male Bunk Capacity
    <span class="badge badge-default badge-pill maleBunksCount"></span>
  </li>
  <li class="list-group-item justify-content-between">
    Female Bunk Capacity
    <span class="badge badge-default badge-pill femaleBunksCount"></span>
  </li>
  <li class="list-group-item justify-content-between">
    Mixed Bunk Capacity
    <span class="badge badge-default badge-pill mixedBunksCount"></span>
  </li>
</ul>
        </div>
        </div>
        <div class="modal-footer">
           <button type=button id="displayBunkCountClose" class = "btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="displaySoupKitchenCount" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend id="soupKitchenCount">Soup Kitchen Seat Count</legend>
         <div id="BunkCountDiv">
 
<ul class="list-group">
  <li class="list-group-item justify-content-between">
    Seat Count
    <span class="badge badge-default badge-pill soupKitchenCount"></span>
  </li>
</ul>
        </div>
        </div>
        <div class="modal-footer">
           <button type=button id="displaySoupKitchenCountClose" class = "btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




<div class="modal fade" id="addServices" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Add a Service</legend>
         <div id="addAServiceDiv">
 <label for="addServiceAvailableService">Select Available Service</label>
      <select id="addServiceAvailableService"><option>Make a selection</option></select>
      <form class="addServicesExtraForm" hidden>
        <label for="addServiceDescription">Service Description</label>
    <input type="text" class="form-control" id="addServiceDescription" placeholder="Enter Description of Service"/>
     <label for="addServiceHours">Hours of Operation</label>
    <input type="text" class="form-control" id="addServiceHours" placeholder="Enter Service's Hours of Operation"/>
    <label for="addServiceConditions">Conditions for Use</label>
    <input type="text" class="form-control" id="addServiceConditions" placeholder="Add Conditions for Use"/>
  </form>

    <form class="addServicesShelter" hidden>
        <label for="addServiceShelterMaleBunk">Male Bunk Capacity</label>
    <input type="text" class="form-control" id="addServiceShelterMaleBunk" placeholder="0"/>
     <label for="addServiceShelterFemaleBunk">Female Bunk Capacity</label>
    <input type="text" class="form-control" id="addServiceShelterFemaleBunk" placeholder="0"/>
    <label for="addServiceShelterMixedBunk">Mixed Bunk Capacity</label>
    <input type="text" class="form-control" id="addServiceConditions" placeholder="0"/>
  </form>

   <form class="addServiceSoupKitchen" hidden>
        <label for="addServiceSoupKitchenCapacity">Seat Capacity</label>
  </form>

        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="addServicesSave" class = "btn btn-default">Save</button>
           <button type=button id="addServicesCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

 <div class="modal" id="addNewServiceConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="newServiceConfirm">Are you sure you want to add the new service?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="newServiceYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="editServiceCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editServices" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Edit a Service</legend>
         <div id="editAServiceDiv">
 <label for="editServiceAvailableService">Select Offered Service</label>
      <select id="editServiceAvailableService"><option>Make a selection</option></select>
      <form class="editServicesExtraForm" hidden>
        <label for="addServiceDescription">Service Description</label>
    <input type="text" class="form-control" id="editServiceDescription" placeholder="Enter Description of Service"/>
     <label for="editServiceHours">Hours of Operation</label>
    <input type="text" class="form-control" id="editServiceHours" placeholder="Enter Service's Hours of Operation"/>
    <label for="editServiceConditions">Conditions for Use</label>
    <input type="text" class="form-control" id="editServiceConditions" placeholder="Add Conditions for Use"/>
  </form>

    <form class="editServicesShelter" hidden>
        <label for="editServiceShelterMaleBunk">Male Bunk Capacity</label>
    <input type="text" class="form-control" id="editServiceShelterMaleBunk" placeholder="0"/>
     <label for="editServiceShelterFemaleBunk">Female Bunk Capacity</label>
    <input type="text" class="form-control" id="editServiceShelterFemaleBunk" placeholder="0"/>
    <label for="editServiceShelterMixedBunk">Mixed Bunk Capacity</label>
    <input type="text" class="form-control" id="editServiceConditions" placeholder="0"/>
  </form>

   <form class="editServiceSoupKitchen" hidden>
        <label for="editServiceSoupKitchenCapacity">Seat Capacity</label>
  </form>

        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="editServicesSave" class = "btn btn-default">Save</button>
           <button type=button id="editServicesCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

 <div class="modal" id="editServiceConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="newServiceConfirm">Are you sure you want to save the changes to the existing service?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="editServiceYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="editServiceCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteServices" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Delete a Service</legend>
         <div id="deleteAServiceDiv">
 <label for="deleteServiceAvailableService">Select Offered Service</label>
      <select id="deleteServiceAvailableService"><option>Make a selection</option></select>

        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="deleteServicesSave" class = "btn btn-default">Delete</button>
           <button type=button id="deleteServicesCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

 <div class="modal" id="deleteServiceConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="deleteServiceConfirm">Are you sure you want to delete the existing service?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="deleteServiceYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="deleteServiceCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>


      <div class="modal fade" id="itemRequestModal" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Search For Items</legend>

         <div id="searchtemsDiv">
   
  <div class="form-group">
    <label for="searchItemName">Item Name</label>
    <input type="text" class="form-control" id="searchItemName" placeholder="Enter Name of Item"/>
   <label for="searchItemType">Item Type</label>
      <select id="searchItemType"><option>Make a selection</option><option>Food</option><option>Supply</option></select>

<div>
<label for="searchtemFoodCategory">Food Category</label>
      <select id="searchtemFoodCategory"><option>Make a selection</option><option>Vegetables</option><option>Nuts/Grains/Beans</option><option>Meat/Seafood</option><option>Dairy/Eggs</option>
<option>Sauce/Condiment/Seasoning</option><option>Juice/Drink</option>
      </select>
</div>

<div>
<label for="searchItemSupplyCategory">Food Category</label>
      <select id="searchItemSupplyCategory"><option>Make a selection</option><option>Personal Hygiene</option><option>Clothing</option><option>Shelter</option><option>Other</option>
<option>Sauce/Condiment/Seasoning</option><option>Juice/Drink</option>
      </select>
</div>


 <label for="searchItemStorageType">Storage Type</label>
      <select id="searchItemStorageType"><option>Make a selection</option><option>Dry Good</option><option>Refrigerated</option><option>Frozen</option></select>

 <label for="searchItemExpiration">Expiration Date (If Any)</label>
    <input type="text" class="form-control" id="searchItemExpiration" placeholder="yyyy-mm-dd"/>

<label for="searchItemQuantity">Quantity</label>
   <input type="text" class="form-control" id="searchItemQuantity" placeholder="Enter Number of Items"/>


        </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type=button id="searchItemSearch" class = "btn btn-default">Save</button>
           <button type=button id="searchItemCancel" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="itemSearchResults" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">

          
          </div>
          <div class="modal-body">
             <legend>Item Search Results</legend>
            <div id="itemSearchReportHeader">
 <div class = "row" id="itemSearchReportBody">
  <table class="table table-striped" id="itemSearchReportTable">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Quantity</th>
         <th>Owned</th>
         <th>Request Quantity</th>
      </tr>
    </thead>
    <tbody id="itemSearchReportTableBody">
    </tbody>
  </table>
 </div>
        </div>
</div>
        <div class="modal-footer">
          <button type=button id="itemSearchReportRequestBtn" class = "btn btn-default">Request Items</button>
          <button type=button id="itemSearchReportCancelBtn" class = "btn btn-default">Cancel</button>
        </div>
      </div>
    </div>
  </div>


 <div class="modal" id="itemSearchCancel" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="requestCancelConfirm">Are you sure you want to close this without making an item request?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="searchItemYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="searchItemCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>




 <div class="modal fade" id="requestStatusReport" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">

          
          </div>
          <div class="modal-body">
             <legend>Item Request Status Report</legend>
            <div id="requestStatusReportHeader">
 <div class = "row" id="requestStatusReportBody">
  <table class="table table-striped" id="requestStatusReportTable">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Quantity</th>
         <th>Request Status</th>
         <th>Cancel Request</th>
      </tr>
    </thead>
    <tbody id="requestStatusReportTableBody">
    </tbody>
  </table>
 </div>
        </div>
</div>
        <div class="modal-footer">
          <button type=button id="requestStatusReportCancelBtn" class = "btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


 <div class="modal" id="requestStatusCancelConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="requestCancelConfirm">Are you sure you want to cancel this item request?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="requestCancelYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="requestCancelCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="availableBunkReport" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">

          
          </div>
          <div class="modal-body">
             <legend>Item Request Status Report</legend>
            <div id="availableBunkReportHeader">
 <div class = "row" id="availableBunkReportBody">
  <table class="table table-striped" id="availableBunkReportTable">
    <thead>
      <tr>
      <th>Male Bunk Count</th>
        <th>Female Bunk Count</th>
         <th>Mixed Bunk Count</th>
         <th>Site Name</th>
         <th>Primary Phone</th>
        <th>Address</th>
         <th>City</th>
         <th>State</th>
         <th>Zip Code</th>
         <th>Hours</th>
         <th>Conditions</th>
      </tr>
    </thead>
    <tbody id="availableBunkReportTableBody">
    </tbody>
  </table>
 </div>
        </div>
</div>
        <div class="modal-footer">
          <button type=button id="availableBunkReportCancelBtn" class = "btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<div class="modal" id="requestStatusCancelConfirm" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="requestCancelConfirm">Are you sure you want to cancel this item request?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="requestCancelYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="requestCancelCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="outstandingRequestReport" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">

          
          </div>
          <div class="modal-body">
             <legend>Outstanding Requests</legend>
            <div id="outstandingRequestReportHeader">
 <div class = "row" id="outstandingRequestReportBody">
  <table class="table table-striped" id="outstandingRequestReportTable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Category</th>
         <th>Storage</th>
         <th>Sub-Category</th>
         <th>Quantity</th>
         <th>Request Status</th>
      </tr>
    </thead>
    <tbody id="outstandingRequestReportTableBody">
    </tbody>
  </table>
 </div>
        </div>
</div>
        <div class="modal-footer">
          <button type=button id="outstandingRequestReportCancelBtn" class = "btn btn-default">Save</button>
          <button type=button id="outstandingRequestReportCancelBtn" class = "btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal" id="outstandingRequestSave" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="outstandingRequestSaveonfirmQues">Are you sure you want to save the changes and close this report?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="outstandingRequestSaveYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="outstandingRequestSaveCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="outstandingRequestCancel" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
             <h4 id="outstandingRequestCancelConfirm">Are you sure you want to close this report without saving?</h4> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="outstandingRequestCancelYes">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" id="outstandingRequestCancelNo">No</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mealsRemainingReport" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
             <legend>Meals Remaining Report</legend>
 <div id="MealsRemainingDiv">
<ul class="list-group">
  <li class="list-group-item justify-content-between">
    Meals Remaining
    <span class="badge badge-default badge-pill mealsRemaining"></span>
  </li>
  <li class="list-group-item justify-content-between">
    Vegetable/Nuts/Grains/Beans Donations Needed
    <span class="badge badge-default badge-pill vegNutsGrainsBeanDonations"></span>
  </li>
  <li class="list-group-item justify-content-between">
    Meat/Seafood Donations Needed
    <span class="badge badge-default badge-pill meatSeafoodDonations"></span>
  </li>
   <li class="list-group-item justify-content-between">
    Dairy/Eggs Donations Needed
    <span class="badge badge-default badge-pill dairyEggsDonations"></span>
  </li>
</ul>
        </div>
</div>
        <div class="modal-footer">
          <button type=button id="mealsRemainingReportCancelBtn" class = "btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    </div> <!-- /container -->
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/home.js"></script>
<script src="./js/bootstrap-select.js"></script>

  </body>
</html>