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
        5. Availability
      </h3>
      <p>
        Indicate your availability by checking the boxes when you will be available.
      </p>
      <form action="page6.php">
        <div class="row">
        <div class="col-sm-12">  
        <table class="table table-bordered">
          <tr>
            <th>Hours</th>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
          </tr>
          <tr>
            <th>12:00am - 6:00am</th>
            <td><input type="checkbox" name="sun12-1"></td>
            <td><input type="checkbox" name="mon12-1"></td>
            <td><input type="checkbox" name="tue12-1"></td>
            <td><input type="checkbox" name="wed12-1"></td>
            <td><input type="checkbox" name="thu12-1"></td>
            <td><input type="checkbox" name="fri12-1"></td>
            <td><input type="checkbox" name="sat12-1"></td>
          </tr>
          <?php 
          for($i=6; $i <= 10; $i++) {
            $starttime = $i;
            $finishtime = $i+1;
            echo '<tr>';
            echo '<th>',$starttime,':00am - ',$finishtime,':00am</th>';
            echo '<td><input type="checkbox" name="sun',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="mon',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="tue',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="wed',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="thu',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="fri',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="sat',$starttime,'-',$finishtime,'"></td>';
            echo '</tr>';
          }
          ?>
          <tr>
            <th>11:00am - 12:00pm</th>
            <td><input type="checkbox" name="sun12-1"></td>
            <td><input type="checkbox" name="mon12-1"></td>
            <td><input type="checkbox" name="tue12-1"></td>
            <td><input type="checkbox" name="wed12-1"></td>
            <td><input type="checkbox" name="thu12-1"></td>
            <td><input type="checkbox" name="fri12-1"></td>
            <td><input type="checkbox" name="sat12-1"></td>
          </tr>
          <tr>
            <th>12:00pm - 1:00pm</th>
            <td><input type="checkbox" name="sun12-13"></td>
            <td><input type="checkbox" name="mon12-13"></td>
            <td><input type="checkbox" name="tue12-13"></td>
            <td><input type="checkbox" name="wed12-13"></td>
            <td><input type="checkbox" name="thu12-13"></td>
            <td><input type="checkbox" name="fri12-13"></td>
            <td><input type="checkbox" name="sat12-13"></td>
          </tr>
          
          <?php
          for($i = 13; $i <= 20; $i++) {
            $starttime = $i;
            $finishtime = $i + 1;
            echo '<tr>';
            echo '<th>',$starttime-12,':00pm - ',$finishtime-12,':00pm</th>';
            echo '<td><input type="checkbox" name="sun',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="mon',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="tue',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="wed',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="thu',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="fri',$starttime,'-',$finishtime,'"></td>';
            echo '<td><input type="checkbox" name="sat',$starttime,'-',$finishtime,'"></td>';
            echo '</tr>';
          }
         
          ?>
          
          <tr>
            <th>9:00pm - 12:00am</th>
            <td><input type="checkbox" name="sun23-24"></td>
            <td><input type="checkbox" name="mon23-24"></td>
            <td><input type="checkbox" name="tue23-24"></td>
            <td><input type="checkbox" name="wed23-24"></td>
            <td><input type="checkbox" name="thu23-24"></td>
            <td><input type="checkbox" name="fri23-24"></td>
            <td><input type="checkbox" name="sat23-24"></td>
          </tr>
        </table>
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
  </body>
</html>