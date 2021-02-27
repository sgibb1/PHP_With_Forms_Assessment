<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP With Forms Assessment (GET)</title>
</head>
<body>
  <?php
    $name = htmlspecialchars($_GET['name']);
    $addy = htmlspecialchars($_GET['addy']);
    $city = htmlspecialchars($_GET['city']);
    $state = htmlspecialchars($_GET['state']);
    $zip = htmlspecialchars($_GET['zip']);
  ?>

  <h1>Thank you for your contact information!</h1>

  <br>

  <h2>Name: <?= $name ?></h2>
  <h2>Address: <?= $addy ?></h2>
  <h2>City: <?= $city ?></h2>
  <h2>State: <?= $state ?></h2>
  <h2>Zip: <?= $zip ?></h2>

</body>
</html>
