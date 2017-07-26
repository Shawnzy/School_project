var username = "null";


$(document).ready(function () {


	$('#submitBtn').click(function(){
		if ($('#inputUsername').val() == ""){
			alert("Please enter Username and try again.");
		}

		else if ($('#inputpassword').val() == ""){
			alert("Please enter password and try again.");
		}
		else{
			username = $("#inputUsername").val();
			var pass = $("#inputpassword").val();
			checkPerson(username,pass);
		}
		return false;
	});


    $('#availableBunksBtn').click(function(){
            $( "#availableBunkReportTableBody" ).empty();
            $("#availableBunkReport").modal();
    $("#availableBunkReport .modal-body > legend").html("Available Bunks Report");
            populateAvailableBunksReport();
        return false;

});

    $('#mealsRemainingBtn').click(function(){
    $("#mealsRemainingReport").modal();
    $("#mealsRemainingReport .modal-body > legend").html("Meals Remaining Report");
    populateMealsRemainingReport();
    
return false;
});

  }); 

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


function checkPerson(username,password){
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/scripts/user.php",
             data: {
            	username: username, 
            	password: password
            },
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            success: function (data) {
             if(data === null){
                alert("User/Password combination not found. Please try again.");
             }
             else{
                    sessionStorage.setItem("username", data.username);
                    sessionStorage.setItem("siteID", data.site_sid);
                     window.location.href = "home.php";
             }   
   		
            },
            error: function (response) {
            	
                alert("User/Password combination not found. Please try again.");
            }
        });
	return false;
};