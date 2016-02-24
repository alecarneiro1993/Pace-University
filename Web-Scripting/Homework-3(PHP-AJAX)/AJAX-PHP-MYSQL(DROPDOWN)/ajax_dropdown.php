<html>
  <head>
    <title>Alexandre's Website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
      function showUser() {
        var data = {result:$("select[name=select]").val()};

        $.ajax({
          url: 'ajax_dropdown_select.php',
          type: 'POST',
          data: data,
          success: function(response) {

            $("#clients_list").html(response);
          },
          error: function() {
            alert("Something wrong went down");
          }
        });
  }
    </script>
  </head>
  <body>
    <main>
      <?php
      // Create connection
      $con = mysqli_connect("localhost", "root", "root", "SQL_Homework");
      // Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
      // Outputs the clients
      echo "<h1>Client's Table Output</h1>";
      //
      $sql = "SELECT * FROM Clients";
      $result = $con->query($sql);
      $array_results = array();

      foreach($result as $key => $value) {
        $array_results[$key]["id"] = $value["id"];
        $array_results[$key]["name"] = $value["name"];
        $array_results[$key]["age"] = $value["age"];
      }

      if (is_array($array_results))
      {
        echo "<table border='1px solid'>";
        echo "<tr><th>Name</th><th>Age</th></tr>";
        // output data of each row
        foreach($array_results as $value)
        {
          echo "<tr><td>Name: " . $value["name"] . "</td><td>Age: " . $value["age"]. "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }

      echo '<select name="select" width="200px" onchange="showUser(this.value)">';
      foreach($array_results as $value){
        echo '<option value="' . $value['id'] . '">'. $value['name'] . '</option>';
      }
      echo '</select>';




      $con->close();
      ?>

      <table id="clients_list" border="1px solid">
      </table>

    </main>
  </body>
</html>
