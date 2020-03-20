<!DOCTYPE html>
<html>
<head>
	<title>Longest team</title>
	  <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
</head>
<body>
 
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
    $sql = "SELECT * FROM info order by TIMESTAMPDIFF(YEAR, DateTo, DateFrom) LIMIT 2";
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