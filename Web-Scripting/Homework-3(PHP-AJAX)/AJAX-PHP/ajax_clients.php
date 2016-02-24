<?php
  // Create connection
  $con = mysqli_connect("localhost", "root", "root", "SQL_Homework");
  // Check connection
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);

}
  $name = $_POST["name"];
  $age = $_POST["age"];

  $sql = "INSERT INTO Clients(name, age) VALUES ('" . $name ."' ,  ". $age ." )";

  if ($con->query($sql) === TRUE) {
    $sql_new = "SELECT * FROM Clients";
    $result = $con->query($sql_new);
    $array_results = array();
    foreach($result as $key => $value) {
      $array_results[$key]["id"] = $value["id"];
      $array_results[$key]["name"] = $value["name"];
      $array_results[$key]["age"] = $value["age"];
    }
    if (is_array($array_results))
    {
      echo "<table id='clients_list' border='1px solid'>";
      echo "<tr><th>Name</th><th>Age</th></tr>";
      // output data of each row
      foreach($array_results as $value)
      {
        echo "<tr><td>" . $value["name"] . "</td><td>" . $value["age"]. "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }

  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
?>
