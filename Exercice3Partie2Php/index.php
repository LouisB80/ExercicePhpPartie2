<?php
  $age = 23;
  $gender = "Homme";
 ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 3 Partie 2 PHP</title>
</head>
<body>
  <h1>Exercice 3 Partie 2 PHP</h1>
  <div class="container-fluid">
    <p>
      <?php if ($gender == "Homme" && $age >= 18) {
        echo "Vous etes un $gender et vous etes majeur, vous avez $age ans";
      }
      elseif ($gender == "Femme" && $age >= 18) {
        echo "Vous etes une $gender et vous etes majeur, vous avez $age ans";
      }
      elseif ($gender == "Homme" && $age < 18) {
        echo "Vous etes un $gender et vous etes mineur, vous avez $age ans";
      }
      else {
        echo "Vous etes une $gender et vous etes mineur, vous avez $age ans";
      }
      ?>
    </p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
