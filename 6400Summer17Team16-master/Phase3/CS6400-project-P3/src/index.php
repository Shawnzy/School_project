
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atlanta Sharing Alliance Coordination System Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
    <link href="./css/theme.css" rel="stylesheet">

<div class="container">
  <div class = "row headerImage">
 <img src="./images/logo.png" title="ASACS_Logo">
 <button type="button" class="btn btn-primary btn-lg" id="availableBunksBtn">View Available Bunks</button>
 <button type="button" class="btn btn-primary btn-lg" id="mealsRemainingBtn">View Meal Remaining</button>
    </div>

<div class="row pageheader">
  <h1 class="text-center">Atlanta Sharing Alliance Coordination System</h1>
</div>
</div>
  </head>

  <body>


<div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Enter Username" required autofocus>
        <label for="inputpassword" class="sr-only">Password</label>
        <input type="password" id="inputpassword" class="form-control" placeholder="Enter Password" required autofocus>
        <button id="submitBtn" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


     <div class="modal fade" id="availableBunkReport" tabindex = "-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">

          
          </div>
          <div class="modal-body">
             <legend>Available Bunks Report</legend>
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








<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/signin.js"></script>
  </body>
</html>