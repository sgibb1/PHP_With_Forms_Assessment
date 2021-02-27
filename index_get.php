<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP With Forms Assessment (GET)</title>
</head>
<body>
  <h1> Please enter your contact information </h1>
    <form action = "welcome_get.php" method= "GET">
      <div>
      <!-- First and last name -->
      <label for="name">First and Last Name:</label>
      <input id = "name" type = "text" name = "name">
      </div>
      
      <div>
      <!-- Address -->
      <label for = "addy">Address:</label>
      <input id = "addy" type = "text" name = "name">
      </div>

      <div>
      <!-- City -->
      <label for = "city">City:</label>
      <input id = "city" type = "text" name = "city">
      </div>
      
      <div>
      <!-- Zip Code -->
      <label for = "state">State:</label>
      <input id = "state" type = "text" name = "state">
      </div>
      
      <div>
      <!-- Phone Number -->
      <label for = "zip">Zip Code: </label>
      <input id = "zip" type = "text" name = "zip">
      </div>

      <div>
      <button type = "submit">Submit</button>
      </div>
      
</body>
</html>
