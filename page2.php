<?php
session_start();
?>
<!DOCTYPE HTML>
	<html>
		<head>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
			<link rel="stylesheet" href="jobappstyles.css">
			<?php
			
			$_SESSION["page1"] = array(
				
				"position" => $_POST["position"],
				"firstname" => $_POST["firstname"],
				"lastname" => $_POST["lastname"],
				"address1" => $_POST["address1"],
				"address2" => $_POST["address2"],
				"city" => $_POST["city"],
				"state" => $_POST["state"],
				"country" => $_POST["country"],
				"zip" => $_POST["zip"],
				"email" => $_POST["email"],
				"phone1" => $_POST["phone1"],
				"phone2" => $_POST["phone2"]
			)
			?>
		</head>
		<body>
			<div id="container">
				<div id="body">
					
			
			<div class="container">
			    <h3>2. Employment History</h3>
				<p>
					List your employment history starting with the most recent
				</p>

					

				<form action="page3.php" method="POST" id="page2form">
					<div class="well clearfix">
					<h4>
						Employer 1
					</h4>

				    <div class="row">
						<div class="form-group col-sm-6">
							<label for="employer1">Employer*</label>
							<input type="text" class="form-control" name="employer1" id="employer1" placeholder="Employer">
						</div>
						<div class="form-group col-sm-6">
							<label for="address1">Address*</label>
							<input type="text" class="form-control" name="address1" id="address1">
						</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-4">
							<label for="city1">City*</label>
							<input type="text" class="form-control" name="city1" id="city1">
						</div>
						<div class="form-group col-sm-4">
							<label for="state1">State*</label>
							<select class="form-control" id="state1" name="state1">
    <option value=""></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
    </select>
						</div>
						<div class="form-group col-sm-4">
							<label for="zip1">Zip Code*</label>
							<input type="text" class="form-control" name="zip1" id="zip1">
						</div>
						</div>
						<div class="row">
						<div class="form-group col-sm-6">
							<label for="position1">Position*</label>
							<input type="text" class="form-control" name="position1" id="position1" placeholder="Position">
						</div>
						<div class="form-group col-sm-6">
							<label for="supervisor1">Supervisor*</label>
							<input type="text" class="form-control" name="supervisor1" id="supervisor1" placeholder="Name">
						</div>
						</div>
						<div class="row">
						<div class="form-group col-sm-6">
						    <label for="phone1">Phone Number of Supervisor*</label>
							<input type="text" class="form-control" name="phone1" id="phone1" placeholder="Phone Number">
						</div>
						<div class="col-sm-6">
						    <label>Can we contact your supervisor?</label>
						    <div class="radio">
						        <label>
							        <input type="radio" name="canContact1" id="canContact11" value="Yes" checked>Yes
							    </label>
						    </div>
						    <div class="radio">
						        <label>
						            <input type="radio" name="canContact1" id="canContact12" value="No">No
						        </label>
						    </div>
				        </div>
						</div>
						<div class="row">
							 <div class="form-group col-sm-4">
					        <label for="startDate1">Start Date*</label>
					        <input type="date" class="form-control" name="startDate1" id="startDate1">
					    </div>
					    <div class="form-group col-sm-4" id="endDateGroup1">
					        <label for="endDate1">End Date</label>
					        <input type="date" class="form-control" name="endDate1" id="endDate1">
					    </div>
					    <div class="checkbox col-sm-4">
					        <label><input type="checkbox" name="current1" value="yes" id="current1">Current Employer?</label>
					    </div>
						</div>
						<div class="row">
							<div class="form-group col-sm-4">
					        <label for="salary1">Pay*</label>
					        <input type="text" class="form-control" name="salary1" id="salary1" placeholder="Pay">
					    </div>
					    <div class="col-sm-2">
								<label>Pay Rate</label>
								<div class="radio">
									<label>
										<input type="radio" name="payper1" id="perhr1" value="hourly" checked>Hourly
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="payper1" id="peryear1" value="yearly">Yearly
									</label>
								</div>
					    </div>

							 <div class="form-group col-sm-6">
					        <label for="reason1">Reason For Leaving</label>
					        <textarea class="form-control" rows="3" name="reason1" id="reason1"></textarea>
					    </div>
						</div>
						</div>

					<div class="checkbox" id="addEmployerParent">
						<label for="addEmployer"><input type="checkbox" id="addEmployer" value="yes" name="addEmployer">Add Employer</label>
					</div>
					<div class="well clearfix" id="secondEmployer" hidden>
					<h4>
						Employer 2
					</h4>

				    <div class="row">
						<div class="form-group col-sm-6">
							<label for="employer2">Employer*</label>
							<input type="text" class="form-control" name="employer2" id="employer2" placeholder="Employer">
						</div>
						<div class="form-group col-sm-6">
							<label for="address2">Address*</label>
							<input type="text" class="form-control" name="address2" id="address2">
						</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-4">
							<label for="city2">City*</label>
							<input type="text" class="form-control" name="city2" id="city2">
						</div>
						<div class="form-group col-sm-4">
							<label for="state2">State*</label>
							<select class="form-control" id="state2" name="state2">
    <option value=""></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
    </select>
						</div>
						<div class="form-group col-sm-4">
							<label for="zip2">Zip Code*</label>
							<input type="text" class="form-control" name="zip2" id="zip2">
						</div>
						</div>
						<div class="row">
						<div class="form-group col-sm-6">
							<label for="position2">Position*</label>
							<input type="text" class="form-control" name="position2" id="position2" placeholder="Position">
						</div>
						<div class="form-group col-sm-6">
							<label for="supervisor2">Supervisor*</label>
							<input type="text" class="form-control" name="supervisor2" id="supervisor2" placeholder="Name">
						</div>
						</div>
						<div class="row">
						<div class="form-group col-sm-6">
						    <label for="phone2">Phone Number of Supervisor*</label>
							<input type="text" class="form-control" name="phone2" id="phone2" placeholder="Phone Number">
						</div>
						<div class="col-sm-6">
						    <label>Can we contact your supervisor?</label>
						    <div class="radio">
						        <label>
							        <input type="radio" name="canContact2" id="canContact21" value="Yes" checked>Yes
							    </label>
						    </div>
						    <div class="radio">
						        <label>
						            <input type="radio" name="canContact2" id="canContact22" value="No">No
						        </label>
						    </div>
				        </div>
						</div>
						<div class="row">
							 <div class="form-group col-sm-4">
					        <label for="startDate2">Start Date*</label>
					        <input type="date" class="form-control" name="startDate2" id="startDate2">
					    </div>
					    <div class="form-group col-sm-4" id="endDateGroup1">
					        <label for="endDate1">End Date</label>
					        <input type="date" class="form-control" name="endDate2" id="endDate2">
					    </div>
					    <div class="checkbox col-sm-4">
					        <label><input type="checkbox" name="current2" value="yes" id="current2">Current Employer?</label>
					    </div>
						</div>
						<div class="row">
							<div class="form-group col-sm-4">
					        <label for="salary2">Pay*</label>
					        <input type="text" class="form-control" name="salary2" id="salary2" placeholder="Pay">
					    </div>
					    <div class="col-sm-2">
								<label>Pay Rate</label>
								<div class="radio">
									<label>
										<input type="radio" name="payper2" id="perhr2" value="hourly" checked>Hourly
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="payper2" id="peryear2" value="yearly">Yearly
									</label>
								</div>
					    </div>

							 <div class="form-group col-sm-6">
					        <label for="reason2">Reason For Leaving</label>
					        <textarea class="form-control" rows="3" name="reason2" id="reason2"></textarea>
					    </div>
						</div>
						</div>
					<div class="col-sm-4">
					    <button type="submit" class="btn btn-primary btn-block">Next Page</button>
					</div>
				</form>
			</div>
						</div>
			</div>
			<footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright 2017 Dan DeVere</span>
      </div>
    </footer>
			<script>
				
			    $(document).ready(function(){
			        $("#current1").click(function(){
			            $("#endDateGroup1").toggle();
			        });
						$("#current2").click(function(){
							$("#endDateGroup2").toggle();
						});
						var secondEmployerVisible = false;
						$("#addEmployer").click(function(){
																		$("#secondEmployer").toggle();
																		secondEmployerVisible = !secondEmployerVisible;
																		});
						
			        $("#page2form").validate({
      rules: {
				employer1: {
					required: true,
					minlength: 2
				},
				position1: {
					required: true,
					minlength: 2
				},
				address1: {
					required: true,
					minlength: 2
				},
				city1: {
					required: true,
					minlength: 2
				},
				state1: {
					required: true
				},
				zip1: {
					required: true,
					number: true
				},
				supervisor1: {
					required: true,
					minlength: 2
				}, 
				phone1: {
					required: true,
					number: true
				},
				startDate1: {
					required: true
				},
				salary1: {
					required: true,
					number: true
				},
				employer2: {
					required: ($("#addEmployer").val() == "yes"),
					minlength: 2
				},
				position2: {
					required: ($("#addEmployer").val() == "yes"),
					minlength: 2
				},
				address2: {
					required: ($("#addEmployer").val() == "yes"),
					minlength: 2
				},
				city2: {
					required: ($("#addEmployer").val() == "yes"),
					minlength: 2
				},
				state2: {
					required: ($("#addEmployer").val() == "yes")
				},
				zip2: {
					required: ($("#addEmployer").val() == "yes"),
					number: ($("#addEmployer").val() == "yes")
				},
				supervisor2: {
					required: ($("#addEmployer").val() == "yes"),
					minlength: 2
				}, 
				phone2: {
					required: ($("#addEmployer").val() == "yes"),
					number: ($("#addEmployer").val() == "yes")
				},
				startDate2: {
					required: ($("#addEmployer").val() == "yes")
				},
				salary2: {
					required: ($("#addEmployer").val() == "yes"),
					number: ($("#addEmployer").val() == "yes")
				}
				
       
      },
			messages: {
          
        },
        errorPlacement: function(error, element) {
          
        },
        highlight: function(element) {
          $(element).parent().find("label").addClass("errorStyle");
        },
        unhighlight: function(element) {
          $(element).parent().find("label").removeClass("errorStyle");
        },
        invalidHandler: function(event, validator) {
				$("h3").parent().find("#error").remove();
          $("h3").after("<p class='errorStyle' id='error'>Fields marked with * are required.</p>");
        }
    });
			
			    });
				

    
		
    </script>
		</body>
	</html>
								