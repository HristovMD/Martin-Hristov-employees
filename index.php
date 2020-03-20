
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Employees</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
     
  </head>
  <body>
  <body ng-app="empapp">
        <div ng-controller="empcontroller">
            <div class="container">
            <form method="POST" action="insert.php">  
            <div class="form-inline">
            <div class="form-group mx-sm-2 mb-2">
    <label for="EmpID" class="sr-only">EmpID</label>
    <input type="text" class="form-control" required ng-model="EmpID" placeholder="Employee ID">
  </div>
            <div class="form-group mx-sm-2 mb-2">
    <label for="ProjectID" class="sr-only">ProjectID</label>
    <input type="text" class="form-control" required ng-model="ProjectID" placeholder="Project ID">
  </div>
  <div class="form-group mx-sm-2 mb-2">
    <label for="DateFrom" class="sr-only">DateFrom</label>
    <input type="date" class="form-control" ng-model="DateFrom" placeholder="Date from">
  </div>
  <div class="form-group mx-sm-2 mb-2">
    <label for="DateTo" class="sr-only">DateTo</label>
    <input type="date" class="form-control" ng-model="DateTo" placeholder="Date to">
  </div>
  <a href="index.php" class="submit btn-primary btn-lg active" role="button" aria-pressed="true" value="Insert new" ng-click="insertdata()">Insert new employee</a>
  <a href="check.php" class="check btn-primary btn-lg active" role="button" aria-pressed="true">Check longest team</a>
  
</form>
</div>
</div>
   
    <table id="myTable">
    <tr>
    <th>EmpID</th>
    <th>ProjectID</th>
    <th id="dF">DateFrom</th>
    <th id="dT">DateTo</th>
    <th>No</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "employees");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM info " ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["EmpID"]. "</td><td>" . $row["ProjectID"] . "</td> <td>". $row["DateFrom"]. "</td>
    <td>" . $row["DateTo"]. "</td> <td>" . $row["No"]. "</td>
</tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
   
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="js/vendor/jquery-3.4.1.min.js"></script>
    <script src="js/vendor/modernizr-3.7.1.min.js"></script>
    <script src= "js/table.js"></script>
    <script src ='js/main.js'></script>
    </body>
    </html>