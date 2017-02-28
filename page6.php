
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
      <h3>
        6. Criminal History and Background Check
      </h3>
      <form action="page7.php" id="page6form">
      <div class="row">
        <div class="col-sm-8 well">
          <p>
        BACKGROUND CHECK DISCLOSURES
A consumer report is a type of background check in which information (which may include, but is not limited to, criminal background, driving background, character, general reputation, personal characteristics, and mode of living) about you is gathered and communicated by a consumer reporting agency (“CRA”) to Starbucks Corportation and/or its subsidiaries, affiliates, other related entities, successors, and/or assigns (the “Company”).
      </p>
      <p>
Company may obtain a consumer report on you to be used for employment purposes, including your application for employment.
      </p>

            <div class="checkbox">
              <label for="background0"><input type="checkbox" name="background0" id="background0">I agree*</label>
            </div>

        </div>
        </div>
        <div class="row">
        <div class="col-sm-8 well">
          <p>
            BACKGROUND CHECK AUTHORIZATION
          </p>
          <p>To the extent permitted by applicable state law, I hereby consent to this investigation and authorize Company to procure consumer report(s), criminal background check(s), and/or investigative consumer report(s) (as defined by applicable California state law), on my background from a consumer reporting agency (“CRA”) or from an investigative consumer reporting agency (“ICRA”), as described in the Background Check Disclosures, the Additional Disclosures, and the California State Law Disclosures (all of which I have received separately from the Company). I have reviewed and understand the information, statements, and notices in the Background Check Disclosures, theAdditional Disclosures, and the California State Law Disclosures, as well as this Background Check Authorization. My authorization remains valid throughout my employment with the Company, such that, to the extent permitted by applicable law, I agree Company can procure additional consumer report(s) and/or criminal background check(s) during my employment without providing additional disclosures or obtaining additional authorizations. Except as otherwise prohibited by state law, I consent to and authorize the Company to share this information with Company’s current or prospective clients, customers, others with a need to know, and/or their agents (including but not limited to staffing/placement company clients and vendor credentialing companies) for business reasons (e.g., to place me in certain employment positions, jobs, work sites, etc.).
          </p>
          <div class="checkbox">
            <label for="background1"><input type="checkbox" name="background1" id="background1">I agree*</label>
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
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright 2017 Dan DeVere</span>
      </div>
    </footer>
    <script>
    $("#page6form").validate({
      rules: {
        background0: {
          required: true
        },
        background1: {
          required: true
        }
      },
      errorPlacement: function(error, element) {
        error.appendTo(element.parent());
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