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
    </head>
  <body>
    <div id="container">
      <div id="body">
        
     
    <div class="container">
      <div class="header">
        <h3>
          Create an Account
        </h3>
      </div>
      <!--
      <div class="row well">
        <div class="col-sm-2">
          <a href="page1.php">page1.php</a>
        </div>
        <div class="col-sm-2">
          <a href="page2.php">page2.php</a>
        </div>
        <div class="col-sm-2">
          <a href="page3.php">page3.php</a>
        </div>
        <div class="col-sm-2">
          <a href="page4.php">page4.php</a>
        </div>
        <div class="col-sm-2">
          <a href="page5.php">page5.php</a>
        </div>
        <div class="col-sm-2">
          <a href="page6.php">page6.php</a>
        </div>
        <div class="col-sm-2">
          <a href="page7.php">page7.php</a>
        </div>
        <div class="col-sm-2">
          <a href="finalPage.php">finalPage.php</a>
        </div>
      </div>
-->
      <form action="page1.php" method="POST" id="indexForm">
        <div class="col-sm-6">
          <div class="form-group col-sm-12">
            <label for="email">Email:</label>
            <input class="form-control" type="text" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group col-sm-12">
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
          </div>
          <div class="form-group col-sm-6">
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </div>
      </form>
    </div>
         </div>
    </div>
    <footer class="footer container" style="position: absolute;">
      <div class="container">
        <span class="text-muted">Copyright 2017 Dan DeVere</span>
      </div>
    </footer>
    <script>
      $(document).ready(function(){
        jQuery.validator.addMethod("passwordCheck", function(value, element) {
        var strength = checkStrength(value);
      return this.optional(element) || strength == "Strong";
    });
    $("#indexForm").validate({
      rules: {
        password: {
          required: true,
          passwordCheck: true
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        
      },
      errorPlacement: function(error, element) {
        
      },
      invalidHandler: function(event, validator) {
        $("h3").parent().find("#passwordError").remove();
        $("h3").parent().find("#emailError").remove();
        $("h3").after("<p class='errorStyle' id='passwordError'>Password must be at least 7 characters and contain upper and lowercase letters, numbers and symbols.</p>");
        $("h3").after("<p class='errorStyle' id='emailError'>Email address is required.</p>");
      }
    });
      function checkStrength(password) {
var strength = 0;
if (password.length < 6) {
return 'Too short';
}
if (password.length > 7) strength += 1;
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1;
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1;
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
return 'Weak';
} else if (strength == 2) {
return 'Good';
} else {
return 'Strong';
}
}
      });
      
    </script>
  </body>
</html>