<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>function ajaxFunction() {
   var data = {flavor:$("select").val(), size: $("input[name=size]").val()};

   $.ajax({
     url: 'insert.php',
     type: 'POST',
     data: data,
     success: function(response) {
       alert("Operation was successful");
     },
     error: function() {
       alert("Something wrong went down");
     }
   });
 }
 </script>
  </head>
  <body>
      <h1>Pace Ice Cream Shop</h1><br />
      <form method="POST">
        <label>flavor:</label>
        <select name='flavor'>
          <option value='chocolate'>chocolate</option>
          <option value='strawberry'>strawberry</option>
          <option value='mint chocolate chip'>mint chocolate chip</option>
          <option value='cotton candy'>cotton candy</option>
          <option value='vanilla'>vanilla</option>
        </select><br /><br />
        <label>scoops: </label><input name='size' type="text" />
        <br /><br />
        <input type="submit" onclick="ajaxFunction()" value="Submit" />
    </form>
  </body>
</html>
