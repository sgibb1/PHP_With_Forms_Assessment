<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP With Forms Assessment (POST)</title>
</head>
<body>
  <h1>Please enter your top 5 favorite sports teams!!</h1>
    <form action = "welcome_post.php" method= "POST">
      <div>
      <!-- First Team -->
      <label for="team1">First Team:</label>
      <input id = "team1" type = "text" name = "team1">
      </div>
      
      <div>
      <!-- Second Team -->
      <label for = "team2">Second Team:</label>
      <input id = "team2" type = "text" name = "team2">
      </div>

      <div>
      <!-- Third Team -->
      <label for = "team3">Third Team:</label>
      <input id = "team3" type = "text" name = "team3">
      </div>
      
      <div>
      <!-- Fourth Team -->
      <label for = "team4">Fourth Team:</label>
      <input id = "team4" type = "text" name = "team4">
      </div>
      
      <div>
      <!-- Fifth Team -->
      <label for = "team5">Fifth Team: </label>
      <input id = "team5" type = "text" name = "team5">
      </div>

      <div>
      <button type = "submit">Submit</button>
      </div>
      
</body>
</html>
