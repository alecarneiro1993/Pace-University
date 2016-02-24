<html>
  <head>
    <title>Alexandre's Website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
    function ajaxFunction() {
    var data = {name:$("input[name=name]").val(), age: $("input[name=age]").val()};

    $.ajax({
      url: 'ajax_clients.php',
      type: 'POST',
      data: data,
      success: function(response) {
        alert("Operation was successful");
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
      ?>
      <form method="post">
        <h2>Client Input</h2>
        <br />
        <label for="form_name">Name</label>
        <br />
        <input id="form_name" type="text" name="name"/>
        <br />
        <label for="form_age">Age</label>
        <br />
        <input id="form_age" type="text" name="age"/>
        <br />
        <input type="button" onclick="ajaxFunction()" value="Add to table" />
      </form>
    </main>
  </body>
</html>
