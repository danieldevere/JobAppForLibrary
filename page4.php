<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="jobappstyles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>

    </head>
    <body>
        <?php
      $addSchool = "no";
      if(isset($_POST["addSchool"])) {
        $addSchool = "yes";
      } else {
        $addSchool = "no";
      }
        $_SESSION["page3"] = array(
          "institution1" => array(
          "name" => $_POST["institution1"],
          "degree" => $_POST["degree1"],
          "completed" => $_POST["completed1"],
          "fromdate" => $_POST["fromdate1"],
          "todate" => $_POST["todate1"],
          "address1" => $_POST["s1address1"],
          "address2" => $_POST["s1address2"],
          "city" => $_POST["s1city"],
          "state" => $_POST["s1state"],
          "zip" => $_POST["s1zip"],
        ), 
          "institution2" => array(
            "name" => $_POST["institution2"],
            
            "degree" => $_POST["degree2"],
            
            "completed" => $_POST["completed2"],
            
            "fromdate" => $_POST["fromdate2"],
            
            "todate" => $_POST["todate2"],
            
            
            "address1" => $_POST["s2address1"],
            "address2" => $_POST["s2address2"],
            
            "city" => $_POST["s2city"],
            
            "state" => $_POST["s2state"],
            
            "zip" => $_POST["s2zip"]
        ),
          "addSchool" => $addSchool
            
        )
        ?>
      <div id="container">
<div id="body">
      <div class="container">
        

        <h3>
          4. Upload Resume
        </h3>
        <p>
          Use the form below to upload your resume for consideration.
        </p>
        <form action="page5.php" id="page4form">
         
          <div class="row">
          <div class="col-sm-6 well">
            <div class="form-group">
              <label for="resume">Upload Resume*</label>
              <input type="file" name="resume" id="resume">
              <p>
                File types accepted: .pdf, .docx
              </p>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
            <button type="submit" class="btn btn-primary btn-block">
              Next Page
            </button>
          </div>
          </div>
          
            

        </form>
      </div>
      </div>
       <footer class="footer" style="position: absolute;">
      <div class="container">
        <span class="text-muted">Copyright 2017 Dan DeVere</span>
      </div>
         </div>
    </footer>
      
      <script>
        
      $("#page4form").validate({
        rules: {
          resume: {
            required: true
          }
        },
        messages: {
          
        },
        errorPlacement: function(error, element) {
          
        },
        highlight: function(element) {
          $(element).parent().find("label").addClass("errorStyle");
          $("h3").after()
        },
        unhighlight: function(element) {
          $(element).parent().find("label").removeClass("errorStyle");
        },
        invalidHandler: function(event, validator) {
          $("h3").parent().find("#error").remove();
          $("h3").after("<p class='errorStyle' id='error'>Fields marked with * are required.</p>");
        }
      });
        
        
      
      </script>
  </body>
</html>