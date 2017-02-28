<?php
session_start()
?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="jobappstyles.css">
  <div id="container">
  <div id="body">
    
 
  <div class="container">
<h4>Job Application >> Review</h4>


<div class="panel panel-info">
<div class="panel-heading"><strong>Contact Information</strong></div>
<ul class="panel-body list-group">
  <li class="list-group-item">
  <div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<p>Name:</p>
</div>
<div class="col-sm-6">
<p>
    <?php
    echo $_SESSION["page1"]["firstname"] . " " . $_SESSION["page1"]["lastname"];
    ?>
    </p>
</div>
    </div>
    <div class="row">
<div class="col-sm-6">
<p>Address:</p>
</div>
<div class="col-sm-6">
  <p>
    <?php
    echo $_SESSION["page1"]["address1"];
    ?>
  </p>
</div>
</div>
    <?php
    if($_SESSION["page1"]["address2"] != "") {
      echo '<div class="row">';
      echo '<div class="col-sm-6"></div>';
      echo '<div class="col-sm-6">';
      echo '<p>' . $_SESSION["page1"]["address2"] . '</p>';
      echo '</div>';
    }
    ?>
  <div class="row">
<div class="col-sm-6">
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page1"]["city"] . ", " . $_SESSION["page1"]["state"] . " " . $_SESSION["page1"]["zip"];
  ?>
  </p>
</div>
</div>
    </div>
  <div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<p>Email:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page1"]["email"];
  ?>
  </p>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<p>Phone:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page1"]["phone1"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
<div class="col-sm-6">
<p>Alternate Phone:</p>
</div>
<div class="col-sm-6">
  <p>
    <?php
    echo $_SESSION["page1"]["phone2"];
    ?>
  </p>
</div>
</div>
</div>
</li>
  </ul>
  </div>
<div class="panel panel-info">
<div class="panel-heading">
<strong>Most Recent Employment</strong>
</div>
  <ul class="panel-body list-group">
    
<li class="list-group-item clearfix">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
<p>Company Name:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer1"]["name"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
<p>Address:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer1"]["address"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer1"]["city"] . ", " . $_SESSION["page2"]["employer1"]["state"] . " " . $_SESSION["page2"]["employer1"]["zip"];
  ?>
  </p>
</div>
    </div>
    <?php
    if($_SESSION["page2"]["employer1"]["currentEmployer"] == "Yes") {
      
    } else {
    echo '<div class="row">';
    echo '<div class="col-sm-6">';
    echo '<p>Reason for Leaving:</p>';
    echo '</div>';
    echo '<div class="col-sm-6">';
    echo '<p>';
    echo $_SESSION["page2"]["employer1"]["reason"];
    echo '</p>';
    echo '</div>';
    echo '</div>';
    }
    
    ?>
    <div class="row">
      <div class="col-sm-6">
<p>Start Date:</p>
</div>
<div class="col-sm-6">
<p> 
  <?php
  echo $_SESSION["page2"]["employer1"]["startDate"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          End Date:
        </p>
      </div>
  <?php
          if($_SESSION["page2"]["employer1"]["currentEmployer"] == "Yes") {
            echo '<div class="col-sm-6">';
            echo '<p>Current Employer</p>';
            echo '</div>';
          } else {
            echo 'div class"col-sm-6">';
            echo '<p>';
            echo $_SESSION["page2"]["employer1"]["endDate"];
            echo '</p>';
            echo '</div>';
          }
          ?>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
<p>Position:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer1"]["position"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Supervisor:
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          <?php
          echo $_SESSION["page2"]["employer1"]["supervisor"];
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
<p>Phone:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer1"]["phone"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Can we contact?
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          <?php
          echo $_SESSION["page2"]["employer1"]["canContact"];
          ?>
        </p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-6">
<p>Wage:</p>
</div>
<div class="col-sm-3">
<p>
  <?php
  echo '$' . $_SESSION["page2"]["employer1"]["salary"];
  ?>
  </p>
</div>
<div class="col-sm-3">
<p>
  <?php
  echo $_SESSION["page2"]["employer1"]["payPer"];
  ?>
  </p>
</div>
    </div>
    
    
  </div>
  </li>
<li class="list-group-item" id="secondEmployer">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
<p>Company Name:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer2"]["name"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
<p>Address:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer2"]["address"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer2"]["city"] . ", " . $_SESSION["page2"]["employer2"]["state"] . " " . $_SESSION["page2"]["employer2"]["zip"];
  ?>
  </p>
</div>
    </div>
    <?php
    if($_SESSION["page2"]["employer2"]["currentEmployer"] == "Yes") {
      
    } else {
    echo '<div class="row">';
    echo '<div class="col-sm-6">';
    echo '<p>Reason for Leaving:</p>';
    echo '</div>';
    echo '<div class="col-sm-6">';
    echo '<p>';
    echo $_SESSION["page2"]["employer2"]["reason"];
    echo '</p>';
    echo '</div>';
    echo '</div>';
    }
    
    ?>
    <div class="row">
      <div class="col-sm-6">
<p>Start Date:</p>
</div>
<div class="col-sm-6">
<p> 
  <?php
  echo $_SESSION["page2"]["employer2"]["startDate"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          End Date:
        </p>
      </div>
  <?php
          if($_SESSION["page2"]["employer2"]["currentEmployer"] == "Yes") {
            echo '<div class="col-sm-6">';
            echo '<p>Current Employer</p>';
            echo '</div>';
          } else {
            echo '<div class"col-sm-6">';
            echo '<p>';
            echo $_SESSION["page2"]["employer2"]["endDate"];
            echo '</p>';
            echo '</div>';
          }
          ?>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
<p>Position:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer2"]["position"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Supervisor:
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          <?php
          echo $_SESSION["page2"]["employer2"]["supervisor"];
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
<p>Phone:</p>
</div>
<div class="col-sm-6">
<p>
  <?php
  echo $_SESSION["page2"]["employer2"]["phone"];
  ?>
  </p>
</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Can we contact?
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          <?php
          echo $_SESSION["page2"]["employer2"]["canContact"];
          ?>
        </p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-6">
<p>Wage:</p>
</div>
<div class="col-sm-3">
<p>
  <?php
  echo '$' . $_SESSION["page2"]["employer2"]["salary"];
  ?>
  </p>
</div>
<div class="col-sm-3">
<p>/
  <?php
  echo $_SESSION["page2"]["employer2"]["payPer"];
  ?>
  </p>
</div>
    </div>
    
    
  </div>
  </li>
</ul>
  </div>

<div class="panel panel-info">
<div class="panel-heading">
<strong>Education Background</strong>
</div>
<ul class="panel-body list-group">
  <li class="list-group-item clearfix">
    <div class="col-sm-6">
    <div class="row">
    <div class="col-sm-6">
  <p>
    Institution Name:
  </p>
  </div>
       <div class="col-sm-6">
    <p>
      <?php
      echo $_SESSION["page3"]["institution1"]["name"];
      ?>
    </p>
  </div>
  </div>
    <div class="row">
      <div class="col-sm-6">
      <p>
        Address:
      </p>
    </div>
    <div class="col-sm-6">
      <?php
      echo $_SESSION["page3"]["institution1"]["address1"];
      ?>
    </div>
    </div>
    <?php
  if($_SESSION["page3"]["institution1"]["address2"] != "") {
    echo '<div class="row">';
    echo '<div class="col-sm-6">';
    echo '</div>';
    echo '<div class="col-sm-6">';
    echo '<p>';
    echo $_SESSION["page3"]["institution1"]["address2"];
    echo "</p>";
    echo "</div>";
    echo "</div>";
  }
   ?>
    
    <div class="row">
    <div class="col-sm-6">
      
    </div>
    <div class="col-sm-6">
      <p>
        <?php
        echo $_SESSION["page3"]["institution1"]["city"] . ", " . $_SESSION["page3"]["institution1"]["state"] . " " . $_SESSION["page3"]["institution1"]["zip"];
        ?>
      </p>
    </div>
  </div>
  </div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
        <p>
          Degree:
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          <?php
          echo $_SESSION["page3"]["institution1"]["degree"];
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Completed:
        </p>
      </div>
      <div class="col-sm-6">
        <?php
        echo $_SESSION["page3"]["institution1"]["completed"];
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>
          Start:
        </p>
      </div>
      <div class="col-sm-3">
        <p>
          <?php
          echo $_SESSION["page3"]["institution1"]["fromdate"];
          ?>
        </p>
      </div>
      <div class="col-sm-3">
        <p>
          Finish:
        </p>
      </div>
      <div class="col-sm-3">
        <p>
          <?php
          echo $_SESSION["page3"]["institution1"]["todate"];
          ?>
        </p>
      </div>
    </div>
    
  </div>
  </li>
    <li class="list-group-item" id="secondSchool">
    <div class="col-sm-6">
    <div class="row">
    <div class="col-sm-6">
  <p>
    Institution Name:
  </p>
  </div>
       <div class="col-sm-6">
    <p>
      <?php
      echo $_SESSION["page3"]["institution2"]["name"];
      ?>
    </p>
  </div>
  </div>
    <div class="row">
      <div class="col-sm-6">
      <p>
        Address:
      </p>
    </div>
    <div class="col-sm-6">
      <?php
      echo $_SESSION["page3"]["institution2"]["address1"];
      ?>
    </div>
    </div>
    <?php
  if($_SESSION["page3"]["institution2"]["address2"] != "") {
    echo '<div class="row">';
    echo '<div class="col-sm-6">';
    echo '</div>';
    echo '<div class="col-sm-6">';
    echo '<p>';
    echo $_SESSION["page3"]["institution2"]["address2"];
    echo "</p>";
    echo "</div>";
    echo "</div>";
  }
   ?>
    
    <div class="row">
    <div class="col-sm-6">
      
    </div>
    <div class="col-sm-6">
      <p>
        <?php
        echo $_SESSION["page3"]["institution2"]["city"] . ", " . $_SESSION["page3"]["institution2"]["state"] . " " . $_SESSION["page3"]["institution2"]["zip"];
        ?>
      </p>
    </div>
  </div>
  </div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
        <p>
          Degree:
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          <?php
          echo $_SESSION["page3"]["institution2"]["degree"];
          ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Completed:
        </p>
      </div>
      <div class="col-sm-6">
        <?php
        echo $_SESSION["page3"]["institution2"]["completed"];
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>
          Start:
        </p>
      </div>
      <div class="col-sm-3">
        <p>
          <?php
          echo $_SESSION["page3"]["institution2"]["fromdate"];
          ?>
        </p>
      </div>
      <div class="col-sm-3">
        <p>
          Finish:
        </p>
      </div>
      <div class="col-sm-3">
        <p>
          <?php
          echo $_SESSION["page3"]["institution2"]["todate"];
          ?>
        </p>
      </div>
    </div>
    
  </div>
  </li>
  </ul>
  
  
  </div>
  <div class="col-sm-4">
    <form action="finished.html">
      <button class="btn btn-primary btn-block" type="submit">
    Submit
  </button>
    </form>
  
  </div>
  </div>
     </div>
  </div>
<footer class="footer">
      <div class="container">
        <span class="text-muted">Copyright 2017 Dan DeVere</span>
      </div>
    </footer>
  <div id="addEmployer" hidden>
    <?php
    echo $_SESSION["page2"]["addEmployer"];
    ?>
  </div>
  <div id="addSchool" hidden>
    <?php
    echo $_SESSION["page3"]["addSchool"];
    ?>
  </div>
  <script>
  $(document).ready(function(){
    var i1 = $("#addEmployer");
    var data1 = i1.textContent;
    if (data1 == "yes") {

    } else {
      $("#secondEmployer").remove();
    }
    var i2 = $("#addSchool");
    var data2 = i2.textContent;
    if(data2 == "yes") {
      
    } else {
      $("#secondSchool").remove();
    }
  });
  </script>
</body>
</html>