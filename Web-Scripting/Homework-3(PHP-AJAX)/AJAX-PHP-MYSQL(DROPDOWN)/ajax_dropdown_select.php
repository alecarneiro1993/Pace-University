<?php
  // Create connection
  $con = mysqli_connect("localhost", "root", "root", "SQL_Homework");
  // Check connection
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);

}
  $id = $_POST['result'];

  $sql = "SELECT * FROM Clients WHERE id = $id";
  $result = $con->query($sql);
  $array_results = array();
  foreach($result as $key => $value) {
    $array_results[$key]["id"] = $value["id"];
    $array_results[$key]["name"] = $value["name"];
    $array_results[$key]["age"] = $value["age"];
  }

  if (is_array($array_results)) {
    echo "<tr><th>Name</th><th>Age</th></tr>";
    echo "<td>" . $array_results[0]['name'] . "</td><td>" . $array_results[0]['age'] . "</td></tr>";

  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
?>
