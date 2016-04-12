<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Midterm_SQL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "hey";
}

//Getting values
$flavor = $_POST["flavor"];
$size = $_POST["size"];
date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s', strtotime($date));

//Checking values
echo "$flavor . $size . $date";

//Insert statement
$sql = "INSERT INTO sales (flavor, n_scoops, purchase_time) VALUES ('" . $flavor ."' ,  ". $size ." , '" . $date ."');";

//Checking if it works
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//TABLE DISPLAYING SALES
echo "<h1>Pace University's Ice Cream sales table</h1>";

      $sql = "SELECT flavor, n_scoops, purchase_time FROM sales";
      $result = $conn->query($sql);
      if ($result->num_rows > 0)
      {
        echo "<table border='1px solid'>";
        echo "<tr><th>Flavor</th><th>Scoops</th><th>Time</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {
          echo "<tr><td>" . $row["flavor"] . "</td><td>" . $row["n_scoops"]. "</td><td>" . $row["purchase_time"]. "</td></tr>";
        }
        echo "</table>";
        echo "<a href='index.php'>BACK TO MAIN PAGE</a>";
      } else {
        echo "0 results";
      }
$conn->close();
?>
