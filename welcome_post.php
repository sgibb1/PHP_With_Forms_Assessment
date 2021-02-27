<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP With Forms Assessment (POST)</title>
</head>
<body>
  <?php
    $team1 = htmlspecialchars($_POST['team1']);
    $team2 = htmlspecialchars($_POST['team2']);
    $team3 = htmlspecialchars($_POST['team3']);
    $team4 = htmlspecialchars($_POST['team4']);
    $team5 = htmlspecialchars($_POST['team5']);
  ?>

  <h1>These are your favorite sports teams!</h1>

  <br>

  <h2>First Team: <?= $team1 ?></h2>
  <h2>Second Team: <?= $team2 ?></h2>
  <h2>Third Team: <?= $team3 ?></h2>
  <h2>Fourth Team: <?= $team4 ?></h2>
  <h2>Fifth Team: <?= $team5 ?></h2>

</body>
</html>
