<?php
session_start()
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
  $current1 = "No";
  $current2 = "No";
  if(isset($_POST["current1"])) {
    $current1 = "Yes";
  } else {
    $current1 = "No";
  }
  if(isset($_POST["current2"])) {
    $current2 = "Yes";
  } else {
    $current2 = "No";
  }
$addEmployer = "no";
if(isset($_POST["addEmployer"])) {
  $addEmployer = "yes";
} else {
  $addEmployer = "no";
}
  $_SESSION["page2"] = array(
    "employer1" => array(
    "name" => $_POST["employer1"],
    "position" => $_POST["position1"],
    "supervisor" => $_POST["supervisor1"],
    "phone" => $_POST["phone1"],
    "canContact" => $_POST["canContact1"],
    "startDate" => $_POST["startDate1"],
    "endDate" => $_POST["endDate1"],
    "currentEmployer" => $current1,
    "reason" => $_POST["reason1"],
    "salary" => $_POST["salary1"],
    "payPer" => $_POST["payper1"],
    "address" => $_POST["address1"],
    "city" => $_POST["city1"],
    "state" => $_POST["state1"],
    "zip" => $_POST["zip1"]
  ),
    "employer2" => array(
    "name" => $_POST["employer2"],
    "position" => $_POST["position2"],
    "supervisor" => $_POST["supervisor2"],
    "phone" => $_POST["phone2"],
    "canContact" => $_POST["canContact2"],
    "startDate" => $_POST["startDate2"],
    "endDate" => $_POST["endDate2"],
    "currentEmployer" => $current2,
    "reason" => $_POST["reason2"],
    "salary" => $_POST["salary2"],
    "payPer" => $_POST["payper2"],
    "address" => $_POST["address2"],
    "city" => $_POST["city2"],
    "state" => $_POST["state2"],
    "zip" => $_POST["zip2"]
  ),
    "addEmployer" => $addEmployer
  )
  ?>
  </head>
  <body>


<div id="container">
  <div id="body">
    
 
  <div class="container">
    <h3>3. Education Information</h3>
    <p>List the educational experiences below, starting with the most recent.</p>
    <form action="page4.php" method="post" id="page3form">
    <div class="well clearfix">
    <h4>Institution 1</h4>
    
    <div class="form-group col-sm-6">
    <label for="institution1">Institution*</label>
    <input type="text" class="form-control" id="institution1" placeholder="Institution" name="institution1">
  </div>
  <div class="form-group col-sm-6">
    <label for="degree1">Degree*</label>
    <input type="text" class="form-control" id="degree1" placeholder="Degree" name="degree1">
  </div>
  <div class="form-group col-sm-4">
      <label for="completed1">Completed?*</label>
      <select class="form-control" id="completed1" name="completed1">
          <option value=""></option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
      </select>
  </div>
      <div class="form-group col-sm-4">
        <label for="fromdate1">Start Date*</label>
        <input type="date" class="form-control" id="fromdate1" name="fromdate1">
      </div>
      <div class="form-group col-sm-4">
        <label for="todate1">Finish Date</label>
        <input type="date" class="form-control" id="todate1" name="todate1">
      </div>
  <div class="col-sm-6">
  <div class="form-group">
      <label for="s1address1">Address 1*</label>
      <input type="text" class="form-control" id="s1address1" placeholder="Address" name="s1address1">
  </div>
  <div class="form-group">
      <label for="s1address2">Address 2</label>
      <input type="text" class="form-control" id="s1address2" placeholder="Address" name="s1address2">
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
      <label for="s1city">City*</label>
      <input type="text" class="form-control" id="s1city" placeholder="City" name="s1city">
  </div>
  <div class="form-group">
      <label for="s1state">State*</label>
      <select class="form-control" id="s1state" name="s1state">
          <option value=""></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
      </select>
  </div>
  <div class="form-group">
      <label for="s1zip">Zip Code*</label>
      <input type="text" class="form-control" id="s1zip" placeholder="Zip Code" name="s1zip">
  </div>
  </div>


    </div>
      <div class="checkbox">
        <label for="addSchool"><input type="checkbox" name="addSchool" id="addSchool" value="yes">Add another Institution</label>
      </div>

    <div class="well clearfix" id="school2" hidden>
    <h4>Institution 2</h4>
    <div class="form-group col-sm-6">
    <label for="institution2">Institution*</label>
    <input type="text" class="form-control" id="institution2" placeholder="Institution" name="institution2">
  </div>
  <div class="form-group col-sm-6">
    <label for="degree2">Degree*</label>
    <input type="text" class="form-control" id="degree2" placeholder="Degree" name="degree2">
  </div>
  <div class="form-group col-sm-4">
      <label for="completed2">Completed?*</label>
      <select class="form-control" id="completed2" name="completed2">
          <option value=""></option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
      </select>
  </div>
      <div class="form-group col-sm-4">
        <label for="fromdate2">Start Date*</label>
        <input type="date" class="form-control" name="fromdate2" id="fromdate2">
      </div>
      <div class="form-group col-sm-4">
        <label for="todate2">Finish Date</label>
        <input type="date" class="form-control" name="todate2" id="todate2">
      </div>
  <div class="col-sm-6">
  <div class="form-group">
      <label for="s2address1">Address 1*</label>
      <input type="text" class="form-control" id="s2address1" placeholder="Address" name="s2address1">
  </div>
  <div class="form-group">
      <label for="s2address2">Address 2</label>
      <input type="text" class="form-control" id="s2address2" placeholder="Address" name="s2address2">
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
      <label for="s2city">City*</label>
      <input type="text" class="form-control" id="s2city" placeholder="City" name="s2city">
  </div>
  <div class="form-group">
      <label for="s2state">State*</label>
      <select class="form-control" id="s2state" name="s2state">
          <option value=""></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="AF">Armed Forces Africa</option><option value="AA">Armed Forces Americas</option><option value="AC">Armed Forces Canada</option><option value="AE">Armed Forces Europe</option><option value="AM">Armed Forces Middle East</option><option value="AP">Armed Forces Pacific</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FM">Federated States Of Micronesia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MH">Marshall Islands</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="MP">Northern Mariana Islands</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
      </select>
  </div>
  <div class="form-group">
      <label for="s2zip">Zip Code*</label>
      <input type="text" class="form-control" id="s2zip" placeholder="Zip Code" name="s2zip">
  </div>
  </div>
    </div>
  <div class="row">
    <div class="col-sm-4">
  <button type="submit" class="btn btn-primary btn-block">Next Page</button>
    </div>
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
        $("#addSchool").click(function(){
        $("#school2").toggle();
       //   alert($("#addSchool").val());
      });
        
    $("#page3form").validate({
      rules: {
        institution1: {
          required: true,
          minlength: 2
        },
        s1address1: {
          required: true,
          minlength: 2
        },
        s1state: {
          required: true
        },
        s1city: {
          required: true,
          minlength: 2
        },
        s1zip: {
          required: true,
          number: true
        },
        degree1: {
          required: true,
          minlength: 2
        },
        fromdate1: {
          required: true
        },
        completed1: {
          required: true
        },
        institution2: {
          required: ($("#addSchool").val() == "yes"),
          minlength: 2
        },
        s2address1: {
          required: ($("#addSchool").val() == "yes"),
          minlength: 2
        },
        s2state: {
          required: ($("#addSchool").val() == "yes")
        },
        s2city: {
          required: ($("#addSchool").val() == "yes"),
          minlength: 2
        },
        s2zip: {
          required: ($("#addSchool").val() == "yes"),
          number: ($("#addSchool").val() == "yes")
        },
        degree2: {
          required: ($("#addSchool").val() == "yes"),
          minlength: 2
        },
        fromdate2: {
          required: ($("#addSchool").val() == "yes")
        },
        completed2: {
          required: ($("#addSchool").val() == "yes")
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