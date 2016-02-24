<html>
  <head>
    <title>Alexandre's Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
      // If form is submitted
      if(!empty($_POST))
      {
        $tmpName = mysqli_real_escape_string($con, $_POST['name']);
        $tmpAge = mysqli_real_escape_string($con, $_POST['age']);
        $sql = 'INSERT INTO Clients (name, age) VALUES ("' . $tmpName . '", ' . $tmpAge . ')';

        if ($con->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
      // Outputs the clients
      echo "<h1>Client's Table Output</h1>";
      //
      $sql = "SELECT name, age FROM Clients";
      $result = $con->query($sql);
      if ($result->num_rows > 0)
      {
        echo "<table border='1px solid'>";
        echo "<tr><th>Name</th><th>Age</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {
          echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"]. "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $con->close();
      ?>
      <form method="post" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
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
        <input type="submit" value="Add to table" />
      </form>
    </main>
  </body>
</html>
