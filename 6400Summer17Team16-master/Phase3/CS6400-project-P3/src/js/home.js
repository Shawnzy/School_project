var userInfo = {
username : "",
site_sid : "",
firstname: "",
lastname: "",
email: ""
};
var siteInfo = {
  site_sid : "",
  short_name : "",
  st_number : "",
  city : "",
  state : "",
  zip_code : "",
  marked_for_deletion : "",
  primary_phone_num : ""
};

var hasSoupKitchen = false;
var soupKitchen = {
  site_sid : "",
  seat_count : "",
  description : "",
  hours_of_op : "",
  conditions_of_use : ""
};

var hasFoodPantry = false;
var foodPantry = "";

var hasFoodBank = false;
var foodBank = {
  site_sid: "",
  item_name : "",
  units_num : ""
};
var hasShelter = false;

var shelter = {
  site_sid : "",
  male_bunk_num : "",
  female_bunk_num : "",
  mixed_bunk_num : ""
};

var clientInfo = {
          firstname : "",
          lastname : "",
        client_sid : "",
          id_num : "",
          id_type : "",
          phone_num : "",
          gender : "",
          checkIn : ""
};

var reduced = false;


//Client Menu Items
const CLIENT_SEARCH = "1";
const SIGN_UP_CLIENT = "2";


//Reports Menu Items
const OUTSTANDING_REQUESTS_REPORT = "1";
const MEALS_REMAINING_REPORT = "2";
const AVAILABLE_BUNKS_REPORT = "3";

//Food Bank Menu
const ADD_ITEMS = "1";
const EDIT_ITEMS = "2";
const REMOVE_ITEMS = "3";

//Soup Kitchen Menu Items
const REDUCE_KITCHEN_SEATS = "1";
const VIEW_KITCHEN_SEATS = "2";

//Shelter Menu Items
const VIEW_BUNK_COUNT = "1";
const REDUCE_BUNK_COUNT = "2";
const RESET_BUNK_COUNT = "3";

//Service Menu Items
const ADD_SERVICE = "1";
const EDIT_SERVICE = "2";
const DELETE_SERVICE = "3";


$(document).ready(function () {

if(sessionStorage.username === undefined){
    window.location.href = "index.php";
}

$('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });

	setPermissions();
	setLogin();
  getSiteInfo(userInfo.site_sid);
	checkForSoupKitchen(userInfo.site_sid);
	checkForFoodBank(userInfo.site_sid);
	checkForShelter(userInfo.site_sid);
	checkForFoodPantry(userInfo.site_sid);



	$('a.clientMenu').click(function () {
		var menuNum = $(this).attr('id').split('_')[1];

		if(menuNum == CLIENT_SEARCH) {
			$("#clientSearchModal").modal();
		}
		else if(menuNum == SIGN_UP_CLIENT){
			$("#signUpForm").modal();
		}

		return false;
	});

	$('a.serviceMenu').click(function () {
		var menuNum = $(this).attr('id').split('_')[1];

		if(menuNum == ADD_SERVICE){
			$("#addServices").modal();
			setAddServicesDefaults();
		
		}

		else if(menuNum == EDIT_SERVICE){
			$("#editServices").modal();
			setEditServicesDefaults();
		}


		else if(menuNum == DELETE_SERVICE){
      var servicesCount = 0;
      if(hasShelter === true){
        servicesCount = servicesCount + 1;
      }
     
      if(hasFoodBank === true){
        servicesCount = servicesCount + 1;
      }

      if(hasFoodPantry === true){
        servicesCount = servicesCount + 1;
      }

      if(hasSoupKitchen === true){
         servicesCount = servicesCount + 1;
      }

      if (servicesCount <= 1){
        alert("Your site cannot remove any more services.");
      }
      else{
        $("#deleteServices").modal();
      setDeleteServicesDefault();
      }
		}

		return false;
	});

	$('a.soupKitchenMenu').click(function () {
		var menuNum = $(this).attr('id').split('_')[1];

		if(menuNum == REDUCE_KITCHEN_SEATS) {
			$("#kitchenReduceSeatsModal").modal();
		}

    else if(menuNum == VIEW_KITCHEN_SEATS) {
      $("#displaySoupKitchenCount").modal();
      getSoupKitchenSeats();
    }

		
		return false;
	});

	$('a.shelterMenu').click(function () {
		var menuNum = $(this).attr('id').split('_')[1];

		if(menuNum == VIEW_BUNK_COUNT) {
			$("#displayBunkCount").modal();
       getBunkCount();
		}

		else if(menuNum == REDUCE_BUNK_COUNT){
			$("#reduceBunkCount").modal();
		}

		else if(menuNum == RESET_BUNK_COUNT){
			$("#resetBunkCount").modal();
			setResetBunkDefaults0();
		}
		
		return false;
	});

	$('a.reportsMenu').click(function () {
		var menuNum = $(this).attr('id').split('_')[1];

		if(menuNum == OUTSTANDING_REQUESTS_REPORT ){
			$('#outstandingRequestReportTableBody').empty();
			//$('#outstandingRequestReportTableBody').append(test);
			$("#outstandingRequestReport").modal();
			$("#outstandingRequestReport .modal-body > legend").html("Outstanding Requests Report");
			populateOutstandingRequestsReport();
		
		}

		else if(menuNum == MEALS_REMAINING_REPORT){
			$("#mealsRemainingReport").modal();
			$("#mealsRemainingReport .modal-body > legend").html("Meals Remaining Report");
        	populateMealsRemainingReport();
		}


		else if(menuNum == AVAILABLE_BUNKS_REPORT){
			$( "#availableBunkReportTableBody" ).empty();
			$("#availableBunkReport").modal();
    $("#availableBunkReport .modal-body > legend").html("Available Bunks Report");
			populateAvailableBunksReport();
		}

		return false;
	});

		$('a.foodBankMenu').click(function () {
		var menuNum = $(this).attr('id').split('_')[1];

		if(menuNum == ADD_ITEMS) {
			$("#addItems").modal();
		}

		else if(menuNum == EDIT_ITEMS){
			//$("#reduceBunkCount").modal();
			//setReduceBunkCountsTo0();
		}

		else if(menuNum == REMOVE_ITEMS){
			//$("#resetBunkCount").modal();
			//setResetBunkDefaults();
		}
		
		return false;
	});


$('#clientSearchCont').click(function () {
    $("#clientSearchResults").modal();
    $(".clientSearchResultsList").empty();
if ($('#clientSearchID').val() != "" && $('#clientSearchFirstName').val() == "" && $('#clientSearchLastName').val() == ""){
  searchClientBySID($('#clientSearchID').val());
}
else if ($('#clientSearchID').val() != "" || $('#clientSearchFirstName').val() != "" || $('#clientSearchLastName').val() != ""){
  searchClientByFields($('#clientSearchID').val(),$('#clientSearchFirstName').val(),$('#clientSearchLastName').val());
}

else if($('#clientSearchID').val() == "" && $('#clientSearchFirstName').val() == "" && $('#clientSearchLastName').val() == ""){
alert("Please enter a client's ID, first name, and/or last name.");
 $("#clientSearchResults").modal('hide');
}
return false;


});


$('#clientReportEdit').click(function () {
 $('#editClientButtons').show();
 $('#clientReportEdit').hide();
 $('#clientReportCheckIn').hide();
 $('#clientReportAddServiceLog').hide();
 $("#clientReportFirstName").removeAttr("readonly");
 $("#clientReportLastName").removeAttr("readonly");
 $("#clientReportPhone").removeAttr("readonly");

return false;
});

$('#clientReportCheckIn').click(function () {
 $("#clientCheckIn").modal();
 getClientCheckInLinks();
return false;
});



$('#signUpFormSave').click(function () {

 if($('#signUpClientSID').val() == ""){
  alert("Client SID is missing. Please try again.");
}
if($('#signUpFirstName').val() == ""){
  alert("First name is missing. Please try again.");
}

else if($('#signUpLastName').val() == ""){
  alert("Last name is missing. Please try again.");
}

else if($('#signUpID').val() == ""){
  alert("First name is missing. Please try again.");
}

else if($('#signUpIDType').val() == ""){
  alert("First name is missing. Please try again.");
}

else if($('#signUpGender').val() == "Make a selection"){
  alert("Please select a gender.");
}

else{
  createNewClient($('#signUpClientSID').val(),$('#signUpFirstName').val(),$('#signUpLastName').val(),$('#signUpID').val(),$('#signUpIDType').val(),$("#signUpPhone").val(),$('#signUpGender').val());
}
return false;
});


$('#clientReportSaveEdit').click(function () {
var errorMessage = "";
var errorFound = false;
if($('#clientReportFirstName').val() == ""){
  errorMessage = "First name is missing."
  errorFound = true;
}

if($('#clientReportLastName').val() == ""){
  errorFound = true;
  if(errorMessage == ""){
    errorMessage = "Last name is missing. Please enter the information and try again.";
  }
  else{
    errorMessage = errorMessage + "Last name is missing. Please try again.";
  }
  
}

if (errorFound === false){
  $("#saveEmployeeEdit").modal();
}
 
return false;
});


$('#clientReportCancelEdit').click(function () {
 $("#revertEmployeeEdit").modal();
return false;
});


$('#employeeEditRevertConfirmYes').click(function () {
  $('#editClientButtons').hide();
 $('#clientReportEdit').show();
 $('#clientReportCheckIn').show();
 $("#clientReportFirstName").attr("readonly", "readonly"); 
 $("#clientReportLastName").attr("readonly", "readonly"); 
 $("#clientReportPhone").attr("readonly", "readonly"); 
$('#clientReportAddServiceLog').show();



$('#clientReportFirstName').val(clientInfo.firstname);
$('#clientReportLastName').val(clientInfo.lastname);
$('#clientReportPhone').val(clientInfo.phone_num);
$("#revertEmployeeEdit").modal('hide');

return false;
});

$('#employeeEditConfirmYes').click(function () {
 
 $('#editClientButtons').hide();
 $('#clientReportEdit').show();
 $('#clientReportCheckIn').show();
 $("#clientReportFirstName").attr("readonly", "readonly"); 
 $("#clientReportLastName").attr("readonly", "readonly"); 
 $("#clientReportPhone").attr("readonly", "readonly"); 
 $('#clientReportAddServiceLog').show();
var oldFirstName = clientInfo.firstname;
var oldLastName = clientInfo.lastname;
var oldPhoneNumber = clientInfo.phone_num;
clientInfo.firstname = $('#clientReportFirstName').val();
clientInfo.lastname = $('#clientReportLastName').val();
clientInfo.phone_num = $('#clientReportPhone').val();

if(clientInfo.phone_num == ""){
  clientInfo.phone_num = "N/A";
}
var logMessage = "";

if (oldFirstName != clientInfo.firstname){
  logMessage = logMessage + "Firstname old: " + oldFirstName + "--Firstname new: " + clientInfo.firstname  + ".";
}

if (oldLastName != clientInfo.lastname){
  logMessage = logMessage + "Lastname old: " + oldLastName + "--Lastname new: " + clientInfo.lastname  + ".";
}

if (oldPhoneNumber != clientInfo.phone_num){
  logMessage = logMessage + "Phone_num old: " + oldPhoneNumber + "--Phone_num new: " + clientInfo.phone_num   + ".";
}

updateEmployeeInformation(logMessage);
$("#saveEmployeeEdit").modal('hide');
return false;
});




$('#resetBunkCountSave').click(function () { 
if ($('#resetMaleBunk').val() != "" && $('#resetFemaleBunk').val() != "" && $('#resetMixedBunk').val() != ""){
  ResetBunkDefaults($('#resetMaleBunk').val() , $('#resetFemaleBunk').val() , $('#resetMixedBunk').val());
}
else if($('#resetMaleBunk').val() == "" || $('#resetFemaleBunk').val() == "" || $('#resetMixedBunk').val() == ""){
alert("Please enter values for Male, Female, and Mixed bunk counts");
}
return false;
});

$('#reduceBunkCountConfirmYes').click(function () { 
  var bunkType = $('#reduceBunkType').val(); 
if (bunkType == "Male"){
reduceBunkCount("shelter.male_bunk_num");
}
else if (bunkType == "Female"){
reduceBunkCount("shelter.female_bunk_num");
}
else if(bunkType == "Mixed"){
reduceBunkCount("shelter.mixed_bunk_num");
}

return false;
});


$('#reduceBunkCountSave').click(function () { 
  var bunkType = $('#reduceBunkType').val(); 
if(bunkType == "Make a selection"){
alert("Please make a selection and try again.");
}
else{
$("#reduceBunkCountConfirm").modal();
}

return false;
});


$('#kitchenReduceSeatsYes').click(function () { 
reduceSoupKitchenCount();
$("#kitchenReduceSeatsModal").modal('hide');
return false;
});


$('#clientCheckInYes').click(function () { 
if (clientInfo.checkIn === "soupkitchen"){
reduceSoupKitchenCount();  

$('#clientServiceLog').modal();
$('#clientCheckInSave').modal('hide');
$('#clientCheckIn').modal('hide');
 
}

else if (clientInfo.checkIn === "shelter"){
  var shelterType = "";
  if (clientInfo.gender === "M"){
    if(shelter.male_bunk_num >= 1 && shelter.male_bunk_num >= shelter.mixed_bunk_num){
      shelterType = "shelter.male_bunk_num";
}
      else if(shelter.male_bunk_num == 0 && shelter.mixed_bunk_num >= 1 ){
      shelterType = "shelter.mixed_bunk_num";


    }

     else{
      shelterType = "shelter.male_bunk_num";
    }
  }

   else if (clientInfo.gender === "F"){
    if(shelter.female_bunk_num >= 1 && shelter.female_bunk_num >= shelter.mixed_bunk_num){
      shelterType = "shelter.female_bunk_num";
}
      else if(shelter.female_bunk_num == 0 && shelter.mixed_bunk_num >= 1 ){
      shelterType = "shelter.mixed_bunk_num";


    }

    else{
      shelterType = "shelter.female_bunk_num";
    }

  }

      reduceBunkCount(shelterType); 
      $('#clientServiceLog').modal();
     $('#clientCheckInSave').modal('hide');
$('#clientCheckIn').modal('hide');
 


}
else{
  $('#clientCheckInSave').modal('hide');
}


return false;
});

// $('#reduceBunkCountConfirmYes').click(function () { 
//   var bunkType = $('#reduceBunkType').val(); 
// if (bunkType == "Male"){
// reduceBunkCount("shelter.male_bunk_num");
// }
// else if (bunkType == "Female"){
// reduceBunkCount("shelter.female_bunk_num");
// }
// else if(bunkType == "Mixed"){
// reduceBunkCount("shelter.mixed_bunk_num");
// }

// return false;
// });


$('#checkInClientSoupKitchen').click(function() {
  clientInfo.checkIn = "soupkitchen";
  $('#clientCheckInSave').modal();
      return false;
  });

$('#checkInClientShelter').click(function() {
  clientInfo.checkIn = "shelter";
  $('#clientCheckInSave').modal();
      return false;
  });

$('#deleteServicesSave').click(function() {
  if($('#deleteServiceAvailableService').val() === "Make a selection"){
    alert("Please make a selection and try again.");
  }
  else{
    $('#deleteServiceConfirm').modal();
  }

      return false;
  });

$('#deleteServiceYes').click(function() {
 deleteServices();
$('#deleteServiceConfirm').modal('hide');

      return false;
  });


});


function setPermissions(){

   // if (typeof userSID === "undefined" && typeof siteSID === "undefined" ) {
     //   window.location.href = 'index.html';
    //}
   
	if (hasSoupKitchen === true){
		$('#soupKitchenMenu').show();
	}
	else
	{
	//	$('#soupKitchenMenu').hide();
	}

	if (hasFoodPantry === true){
		
	}
	else
	{
		
	}

	if (hasShelter === true){
		$('#shelterMenu').show();
	}
	else
	{
	//	$('#shelterMenu').hide();
	}

	if (hasFoodBank === true){
	$('#foodBankMenu').show();
	}
	else
	{
	//	$('#foodBankMenu').hide();
	}
	return false;
};


function getClientCheckInLinks(){
if (hasSoupKitchen === true){
 $('#checkInClientSoupKitchen').show(); 

  }
  else
  {
   $('#checkInClientSoupKitchen').hide(); 
  }

  if (hasFoodPantry === true){
    
  }
  else
  {
    
  }

  if (hasShelter === true){
  $('#checkInClientShelter').show();                 
  }
  else
  {
   $('#checkInClientShelter').hide();
  }

  if (hasFoodBank === true){

  }
  else
  {
  //  $('#foodBankMenu').hide();
  }
return false;
};

function createNewClient(clientSID,clientFirstName,clientLastName,clientIDNum,clientIDType,clientPhone,clientGender){
$.ajax({
            type: "POST",
            dataType: "json",
            url: "/scripts/client.php",
             data: {
            	client_sid: clientSID, 
            	firstname: clientFirstName, 
            	lastname: clientLastName, 
            	id_num: clientIDNum, 
            	id_type: clientIDType, 
            	phone_num: clientPhone,
            	gender: clientGender
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
   				    alert('New client inserted successfully!');
            },
            error: function (response) {
               alert('Error: The client could not be inserted.');
            }
        });


return false;
};

function updateEmployeeInformation(logMessage){
$.ajax({
            type: "POST",
            dataType: "json",
            url: "/scripts/client.php",
             data: {
              client_sid: clientInfo.client_sid, 
              firstname: clientInfo.firstname, 
              lastname: clientInfo.lastname, 
              phone_num: clientInfo.phone_num
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
              alert('New client updated successfully!');
           
          insertNewLog(logMessage);
            },
            error: function (response) {
               alert('Error: The client could not be updated.');
            }
        });


return false;
};

function searchClientBySID(clientSID){
$.ajax({
            type: "GET",
            dataType: "json",
            url: "/scripts/client.php",
             data: {
            	client_sid: clientSID, 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
              var product = data;
   				     var newDiv = '<a href="#" class="list-group-item list-group-item-action searchClientItem"><legend>' + product.client_sid + '| ' + product.lastname + ',' + product.firstname + '</legend></a>';
                $('.clientSearchResultsList').append(newDiv);
                   
                         $('.searchClientItem').click(function() {
                    var selection = this.innerText;
                    selection = selection.split('|')[0];
                    getClientBySID(selection);
                    $("#clientSearchResults").modal('hide');
                     $('#viewClientReport').modal();
                    $('clientSearchModal').modal('hide');
                  });
                 

            },
            error: function (response) {
              alert("No clients were found. Please try a more unique search.");
            }
        });


return false;
};

function searchClientByFields(clientSID,firstName,lastName){
$.ajax({
            type: "GET",
            dataType: "json",
            url: "/scripts/client.php",
             data: {
              firstname: firstName, 
              lastname: lastName,
              client_sid: clientSID
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
              var products = data;

              $.each(products, function (index, product) {
               var newDiv = '<a href="#" class="list-group-item list-group-item-action searchClientItem"><legend>' + product.client_sid + '| ' + product.lastname + ',' + product.firstname + '</legend></a>';
                $('.clientSearchResultsList').append(newDiv);

                  $('.searchClientItem').click(function() {
                    var selection = this.innerText;
                    $('clientSearchModal').modal('hide');
                    selection = selection.split('|')[0];
                   
                    getClientBySID(selection);
                    $("#clientSearchResults").modal('hide');
      
                  });
                });
            },
            error: function (response) {
              alert("No clients were found. Please try a more unique search.");
            }
        });


return false;
};




function getClientBySID(clientSID){
$.ajax({
            type: "GET",
            dataType: "json",
            url: "/scripts/client.php",
             data: {
            	client_sid: clientSID, 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
   			var product = data;
   				clientInfo.client_sid = product.client_sid;
   				clientInfo.firstname = product.firstname;
   				clientInfo.lastname = product.lastname;
				clientInfo.client_sid = product.client_sid;
   				clientInfo.id_num = product.id_num;
          clientInfo.id_type = product.id_type;
   				clientInfo.phone_num = product.phone_num;
            clientInfo.checkIn = "";

          if (clientInfo.phone_num == ""){
            clientInfo.phone_num = "N/A";
          }
   				clientInfo.gender = product.gender;

                     $('#viewClientReport').modal();
                     $('#editClientButtons').hide();
                    $('#clientReportFirstName').val('');
                    $('#clientReportLastName').val('');
                    $('#clientReportPhone').val('');
                    $('#clientReportID').val('');
                    $('#clientReportIDType').val('');
                    $('#clientReportGender').val('');
            $('#clientReportEdit').show();

          $('#clientReportFirstName').val(clientInfo.firstname);
           $('#clientReportLastName').val(clientInfo.lastname);
            $('#clientReportPhone').val(clientInfo.phone_num);
             $('#clientReportID').val(clientInfo.id_num);
              $('#clientReportIDType').val(clientInfo.id_type);
               $('#clientReportGender').val(clientInfo.gender);


            },
            error: function (response) {
            }
        });


return false;
};

function setLogin(){
        
        $.ajax({
          async:false,
            type: "GET",
            dataType: "json",
            url: "/scripts/user.php",
             data: {
            	username:sessionStorage.username
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
   				var product = data;	
   				userInfo.username = product.username;
   				userInfo.site_sid = product.site_sid;
   				userInfo.firstname = product.firstname;
   				userInfo.lastname = product.lastname;
   				userInfo.email = product.email;
                var newDiv2 = '<strong>Logged in as ' + userInfo.firstname + " " + userInfo.lastname + '</strong>';
                $('#loggedInAs').append(newDiv2);
            },
            error: function (response) {
            }
        });
	return false;
};

function getSiteInfo(siteSID){
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/scripts/site.php",
             data: {
            	site_sid: siteSID 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
            	var product = data;
   				siteInfo.site_sid = product.site_sid;
   				siteInfo.short_name= product.short_name;
   				siteInfo.st_number= product.st_number;
   				siteInfo.street = product.street;
   				siteInfo.city = product.city;
   				siteInfo.state = product.state;
   				siteInfo.zip_code = product.zip_code;
   				siteInfo.primary_phone_num = product.primary_phone_num;
            },
            error: function (response) {
            }
        });
	return false;
};

function checkForSoupKitchen(siteSID){
        var found = false;
        $.ajax({
            type: "GET",
            url: "/scripts/soupKitchen.php",
            dataType: "json",
            data: {
            	site_sid: siteSID, 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               var product = data;
               found = true;
               soupKitchen.site_sid = product.site_sid;
               soupKitchen.seat_count = product.seat_count;
               soupKitchen.description = product.description;
               soupKitchen.hours_of_op = product.hours_of_op;
               soupKitchen.conditions_of_use = product.conditions_of_use;
               hasSoupKitchen = true;
            },
            error: function (response) {
            }
        });
	return found;
};

function checkForFoodBank(siteSID){
        var found = false;
        $.ajax({
            type: "GET",
            dataType: "json",
         url: "/scripts/foodbank.php",
         dataType: "json",
            data: {
            	site_sid: siteSID, 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               found = true;
               hasFoodBank = true;
  
            },
            error: function (response) {
            }
        });
	return found;
};

function checkForShelter(siteSID){
        var found = false;
        $.ajax({
            type: "GET",
            dataType: "json",
             url: "/scripts/shelter.php",
             dataType: "json",
             data: {
            	site_sid: siteSID
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               found = true;
               var product = data;
               shelter.site_sid = product.site_sid;
               shelter.male_bunk_num = product.male_bunk_num;
               shelter.female_bunk_num = product.female_bunk_num;
                shelter.mixed_bunk_num = product.mixed_bunk_num;
                hasShelter = true;
            },
            error: function (response) {
            }
        });
	return found;
};

function checkForFoodPantry(siteSID){
        var found = false;
        $.ajax({
            type: "GET",
            dataType: "json",
             url: "/scripts/foodPantry.php",
             dataType: "json",
           data: {
            	site_sid: siteSID, 
    			action: 'getShelterBySiteSID' 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               var product = data;
               found = true;
               foodPantry.site_sid = product.site_sid;
               hasFoodPantry = true;
  
            },
            error: function (response) {
            }
        });
	return found;
};

function setResetBunkDefaults0(){
	$("#resetMaleBunk").val('');
	$("#resetFemaleBunk").val('');
	$("#resetMixedBunk").val('');
	return false;
};

function ResetBunkDefaults(){
	
	 $.ajax({
            type: "POST",
            dataType: "json",
             url: "/scripts/shelter.php",
           data: {
            	site_sid: userInfo.site_sid, 
    			male_bunk_num: $("#resetMaleBunk").val(), 
    			female_bunk_num: $("#resetFemaleBunk").val(), 
    			mixed_bunk_num: $("#resetMixedBunk").val() 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {

               var product = data.toString();
                if(product === "true"){
                alert("The bunk counts were successfully reset.");
                $('#resetBunkCount').modal('hide');
               }
               else {
                 alert("The bunk counts were not reset.");
               }
shelter.male_bunk_num = $("#resetMaleBunk").val();
  shelter.female_bunk_num  = $("#resetFemaleBunk").val();
  shelter.mixed_bunk_num = $("#resetMixedBunk").val();

  
            },
            error: function (response) {
                alert("The bunk counts were not reset.");
            }
        });




	return false;
};

function getBunkCount(){
$('.maleBunksCount').empty();
$('.femaleBunksCount').empty();
$('.mixedBunksCount').empty();

$('.maleBunksCount').append(shelter.male_bunk_num);
$('.femaleBunksCount').append(shelter.female_bunk_num);
$('.mixedBunksCount').append(shelter.mixed_bunk_num);
    
  return false;
};

function getSoupKitchenSeats(){
$('.soupKitchenCount').empty();
$('.soupKitchenCount').append(soupKitchen.seat_count);
  return false;
};

function reduceBunkCount(bunkType){
   $.ajax({
            type: "POST",
            dataType: "json",
             async: false,
             url: "/scripts/shelter.php",
           data: {
          site_sid: userInfo.site_sid, 
          bunkSelection: bunkType
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               var product = data.toString();

               if(product === "true"){
                reduced = true;
                alert("The bunk count was successfully reduced by 1.");
                
                

                if(bunkType === "shelter.male_bunk_num"){
                  shelter.male_bunk_num = Number(shelter.male_bunk_num) - 1;
                }
                  else if (bunkType === "shelter.female_bunk_num"){
                     shelter.female_bunk_num = Number(shelter.female_bunk_num) - 1;
                   }
                   else if (bunkType === "shelter.female_bunk_num"){
                     shelter.mixed_bunk_num = Number(shelter.mixed_bunk_num) - 1;
                }
               }
               else {
                reduced = false;
                 alert("The bunk count could not be reduced.");
                 
               }
            },
            error: function (response) {
              reduced = false;
            alert("The bunk count could not be reduced.");
            }
        });
    $("#reduceBunkCountConfirm").modal('hide');
  return false;
};

function reduceSoupKitchenCount(){
  
   $.ajax({
          async:false,
            type: "POST",
            dataType: "json",
             url: "/scripts/soupKitchen.php",
           data: {
          site_sid: userInfo.site_sid, 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               var product = data.toString();

               if(product === "true"){
                reduced = true;
                alert("The seat count was successfully reduced by 1.");
                
                soupKitchen.seat_count = Number(soupKitchen.seat_count) - 1;
               }
               else {
                reduced = false;
                 alert("The seat count could not be reduced.");
                 
               }
            },
            error: function (response) {
              reduced = false;
            alert("The seat count could not be reduced.");
            
            }
        });
    $("#kitchenReduceSeatsModal").modal('hide');
  return false;
};


function populateAvailableBunksReport(){
	var viewBunkReport = "viewBunkReport";
  $("#availableBunkReportTableBody").html("");

  $.ajax({
    type: "GET",
     url: "/scripts/shelter.php",
        data: {}, 
    dataType: "json",
    contentType: "application/x-www-form-urlencoded; charset=utf-8",
    success:function(data){
            $.each(data, function(index,shelter){
              var row = "<tr>" + "<td>" + shelter.male_bunk_num + "</td>" + "<td>" + shelter.female_bunk_num + "</td>"
          + "<td>" + shelter.mixed_bunk_num + "</td>" + "<td>" + shelter.short_name + "</td>" + "<td>" + shelter.primary_phone_num + "</td>" 
          + "<td>" + shelter.st_address+ "</td>" + "<td>" + shelter.city + "</td>" + "<td>" + shelter.state + "</td>" + "<td>" + shelter.zip_code + "</td>" 
          + "<td>" + shelter.hours_of_op + "</td>" + "<td>" + shelter.conditions_of_use + "</td>"
          + "</tr>";
                $("#availableBunkReportTableBody").append(row);
            });
    

    },
    error:function(response){
      alert("No report found. Please try again.")
    }
  });

  return false;

};

function populateMealsRemainingReport(){
	return false;
};

function populateOutstandingRequestsReport(){
	return false;
};

function setDeleteServicesDefault(){
	$('#deleteServiceAvailableService').empty();
	$('#deleteServiceAvailableService').append('<option>Make a selection</option>');

	if(hasFoodBank === true){
		$('#deleteServiceAvailableService').append('<option>Food Bank</option>');
	}

	if(hasFoodPantry === true){
		$('#deleteServiceAvailableService').append('<option>Food Pantry</option>');
	}

	if(hasShelter === true){
		$('#deleteServiceAvailableService').append('<option>Shelter</option>');
	}

	if(hasSoupKitchen === true){
		$('#deleteServiceAvailableService').append('<option>Soup Kitchen</option>');
	}

	return false;
};

function setEditServicesDefaults(){
	$('#deleteServiceAvailableService').empty();
	$('#deleteServiceAvailableService').append('<option>Make a selection</option>');

	if(hasFoodBank === true){
		$('#deleteServiceAvailableService').append('<option>Food Bank</option>');
	}

	if(hasFoodPantry === true){
		$('#deleteServiceAvailableService').append('<option>Food Pantry</option>');
	}

	if(hasShelter === true){
		$('#deleteServiceAvailableService').append('<option>Shelter</option>');
	}

	if(hasSoupKitchen === true){
		$('#deleteServiceAvailableService').append('<option>Soup Kitchen</option>');
	}

	return false;
};

function setAddServicesDefaults(){
	$('#deleteServiceAvailableService').empty();
	$('#deleteServiceAvailableService').append('<option>Make a selection</option>');

	if(hasFoodBank === false){
		$('#addServiceAvailableService').append('<option>Food Bank</option>');
	}

	if(hasFoodPantry === false){
		$('#addServiceAvailableService').append('<option>Food Pantry</option>');
	}

	if(hasShelter === false){
		$('#addServiceAvailableService').append('<option>Shelter</option>');
	}

	if(hasSoupKitchen === false){
		$('#addServiceAvailableService').append('<option>Soup Kitchen</option>');
	}

	return false;
};


function deleteServices(){
  var serviceSelection = $('#deleteServiceAvailableService').val();

  if(serviceSelection === "Food Pantry"){
    serviceSelection = "foodpantry";
  }
  if(serviceSelection === "Food Bank"){
    serviceSelection = "foodbank";
  }

    if(serviceSelection === "shelter"){
    serviceSelection = "foodpantry";
  }

    if(serviceSelection === "Soup Kitchen"){
    serviceSelection = "soupkitchen";
  }
   $.ajax({
          async:false,
            type: "POST",
            dataType: "json",
             url: "/scripts/manageServices.php",
           data: {
          site_sid: userInfo.site_sid,
          description: serviceSelection 
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
               var product = data.toString();

               if(product === "true"){
                
                alert("The service was successfully removed.");

                 
    
    if(serviceSelection === "shelter"){
      $('#shelterMenu').hide();
      shelter = "";
    }

  else if(serviceSelection === "foodbank"){
    $('#foodBankMenu').hide();
    foodBank = "";

  }

    else if(serviceSelection === "foodpantry"){
    foodPantry = "";
  }

    else if(serviceSelection === "soupkitchen"){
      $('#soupKitchenMenu').hide();
      soupKitchen = "";
   
  }
              }  
                
               else {
                 alert("The service could not be removed.");
                 
               }
            },
            error: function (response) {
              reduced = false;
            alert("The service could not be removed.");
            
            }
        });
    $("#kitchenReduceSeatsModal").modal('hide');
  return false;
};


function insertNewLog(logMessage){
  return false;
};